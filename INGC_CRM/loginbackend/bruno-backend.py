from colorama import Cursor
from flask import Flask, jsonify, request
import sqlite3
import hashlib
# from flask_session import Session
app = Flask(__name__)
# app.config["SESSION_PERMANENT"] = False
# app.config["SESSION_TYPE"] = "filesystem"
# app.secret_key = "27eduCBA09"
# Session(app)

conn = sqlite3.connect('test.db', check_same_thread=False)  
print ("Opened database successfully")  

#home endpoint 
@app.route('/')
def home():
   return jsonify({"result": "App Running"})

#create employee table
@app.route('/createemployees')
def createemployees():
    conn.execute('''CREATE TABLE IF NOT EXISTS Employees (ID INTEGER PRIMARY KEY AUTOINCREMENT, NAME TEXT, EMAIL TEXT, PASSWORD TEXT);''')  
    
    return jsonify({"result": "Table employees created successfully"})

#create services table
@app.route('/createservices')
def createservices():
    conn.execute('''CREATE TABLE IF NOT EXISTS Services (ID INTEGER  PRIMARY KEY AUTOINCREMENT, SERVICE_NAME TEXT, START_TIME TEXT, END_TIME TEXT,Employee_ID INT,CONSTRAINT FK_Employee_ID FOREIGN KEY(Employee_ID) REFERENCES Employees(ID));''')
    
    return jsonify({"result": "Table services created successfully"})

#registration endpoint
@app.route('/register',methods=['POST'])
def register():
    data = request.get_json()
    name = data["name"]
    email = data["email"]
    pd = data["password"]
    password = hashlib.md5(pd.encode('utf-8')).hexdigest()

    if not(bool(name)):
        return jsonify({"result":"name cannot be empty"}),400,{'ContentType':'application/json'}
    elif not(bool(email)):
        return jsonify({"result":"email cannot be empty"}),400,{'ContentType':'application/json'}
    elif not(bool(pd)):
        return jsonify({"result":"password cannot be empty"}),400,{'ContentType':'application/json'}
    else:
        emaildata = conn.execute("SELECT * FROM Employees")
        data = []

        for row in emaildata:
            data.append(row[2])

        if email in data:
            return jsonify({"result":"email already exists"}),400,{'ContentType':'application/json'}
    
        else:
             conn.execute("INSERT INTO Employees (NAME,EMAIL,PASSWORD) VALUES ('"+name+"', '"+email+"', '"+password+"')"); 
             conn.commit()  
             return jsonify({"result": "Registration succesfull"})
        

#login endpoint
@app.route('/login',methods=['POST'])
def login():
    data = request.get_json()
    email = data["email"]
    pd = data["password"]
    password = hashlib.md5(pd.encode('utf-8')).hexdigest()

    if not(bool(email)):
        return jsonify({"result":"email cannot be empty"}),400,{'ContentType':'application/json'}
    elif not(bool(pd)):
        return jsonify({"result":"password cannot be empty"}),400,{'ContentType':'application/json'}
    else:
        emaildata = conn.execute("SELECT * FROM Employees")
        data = []

        for row in emaildata:
            data.append(row[2])

        if email in data:

           pwd = conn.execute("SELECT PASSWORD FROM Employees WHERE EMAIL='"+email+"'")
           pwd = pwd.fetchone()
           pwd = pwd[0]
           if pwd != password:
                return jsonify({"result": "invalid password"}),401,{'ContentType':'application/json'}
           else:
                # session["email"] = email
                id = conn.execute("SELECT ID FROM Employees WHERE EMAIL='"+email+"'")
                id = id.fetchone()
                id = id[0]
                return jsonify({"result":"login successfull","id":id}),200,{'ContentType':'application/json'}


    
        else:
            return jsonify({"result": "no such user exists"}),400,{'ContentType':'application/json'}
    

 
#logout endpoint
@app.route("/logout")
def logout():

    # session.pop('email', None)
    return jsonify({"result": "successfully logged out"}),200,{'ContentType':'application/json'}


#endpoint for adding service
@app.route('/add_service',methods=['POST'])
def add_service():
    # if 'email' in session:

        data = request.get_json()
        print("data : ", data)
        service_name = data["service_name"]
        START_TIME = data["start_time"]
        END_TIME = data["end_time"]
        Employee_ID = str(data["emp_id"])
        print(type(service_name),type(START_TIME),type(END_TIME),type(Employee_ID))

        if not(bool(service_name)):
            return jsonify({"result":"service name cannot be empty"}),400,{'ContentType':'application/json'}
        elif not(bool(START_TIME)):
            return jsonify({"result":"start time cannot be empty"}),400,{'ContentType':'application/json'}
        elif not(bool(END_TIME)):
            return jsonify({"result":"end time cannot be empty"}),400,{'ContentType':'application/json'}
        else:

            conn.execute("INSERT INTO Services (SERVICE_NAME,START_TIME,END_TIME,Employee_ID) VALUES ('"+service_name+"', '"+START_TIME+"', '"+END_TIME+"', '"+Employee_ID+"')"); 
            conn.commit()  
            return jsonify({"result": "Services added successfully"})
    # else:
    #     return jsonify({"result":"you are not logged in"}),401

#endpoint for viewing sevices
@app.route('/service_list/<id>')
def list(id):
    
    # if 'email' in session:
        data = conn.execute("select * from Services WHERE Employee_ID ='"+id+"'");  
    
        records = []
    
  
        for row in data:
            record = {}
            record["ID"] = row[0]
            record["SERVICE_NAME"] = row[1]
            record["START_TIME"] = row[2]
            record["END_TIME"] = str(row[3])
            # record["Employee"] = str(row[4])
            employee = str(row[4])
            emp_data = conn.execute("select NAME from Employees where ID='"+employee+"'")
            for each in emp_data:
                name = each[0]
            record["Employee"] = name
        
        
            records.append(record)
        print(records)
        return jsonify(records)

    # else:
    #     return jsonify({"result":"you are not logged in"}),401,{'ContentType':'application/json'}

#endoint for updating service
@app.route('/update_service/<eid>/<id>',methods=['PUT'])
def update_service(eid,id):
    # if 'email' in session:

        data = request.get_json()
        print("data : ", data)
        service_name = data.get("service_name")
        START_TIME = data.get("start_time")
        END_TIME = data.get("end_time")

        conn.execute("UPDATE Services SET SERVICE_NAME= '"+service_name+"', START_TIME='"+START_TIME+"',END_TIME='"+END_TIME+"' WHERE ID = '"+id+"' AND Employee_ID='"+eid+"';")
        return jsonify({"result": "Services Updated successfully"})
    # else:
    #     return jsonify({"result":"you are not logged in"}),401,{'ContentType':'application/json'}


#endpint for deleting service
@app.route('/delete_service/<eid>/<id>',methods=['DELETE'])
def delete_service(eid,id):
    conn.execute("DELETE FROM Services where ID='"+id+"' AND Employee_ID='"+eid+"'")
    return jsonify({"result": "Services Deleted successfully"})

#view employees list endpoint
@app.route('/view_employees',methods=['GET'])
def viewlist():
    # if 'email' in session:
        data = conn.execute("select * from Employees");  

        records = []
    
        for row in data:
            record = {}
            record["ID"] = row[0]
            record["NAME"] = row[1]
            record["EMAIL"] = row[2]
            record["PASSWORD"] = row[3]

            records.append(record)
        return jsonify(records)
    # else:
    #     return jsonify({"result":"you are not logged in"}),401

    
#endpoint for deleting employees table
@app.route('/dropemployees')
def dropemployees():
    
    conn.execute("DROP TABLE Employees");
    return jsonify({"result":"dropped table employees"})

#endpoint for deleting services table
@app.route('/dropservices')
def dropservices():
    
    conn.execute("DROP TABLE Services");
    return jsonify({"result":"dropped table employees"})     


    
#endpoint for testing
@app.route('/emp',methods=['GET'])
def emp():

    # if 'email' in session:
        emaildata = conn.execute("SELECT * FROM Employees")
        data = []

        for row in emaildata:
            data.append(row[2])

        print(data)

        print('manju@gmail.com' in data)    

        return jsonify(data)
    # else:
    #     return jsonify({"result":"you are not logged in"}),401




if __name__ == "__main__":
    app.run(host='0.0.0.0', port=5001)
