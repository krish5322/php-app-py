import qrcode
import cv2

if __name__=="__main__":

    """Génération d'un QRCode"""
    img = qrcode.make('https://www.inzoservices.com/')
    img.save('qrcodeINZOSERVICES.png')

    """Lecture d'un QRCode"""
    d = cv2.QRCodeDetector()
    val, points, qrcode = d.detectAndDecode(cv2.imread("mister.png"))
    print(val)