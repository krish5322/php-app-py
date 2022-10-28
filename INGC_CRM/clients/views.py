from django.shortcuts import render
from django.http import HttpResponse
from clients.models import Client

from rest_framework.decorators import api_view
from rest_framework.response import Response
from .serializer import clientSerializer2, clientSerializer1


# Create your views here.

def homeClient(request):
    client = Client.objects.all()
    context = {'clients':client}
    return render(request,'clients/clients.html',context)

@api_view(['GET'])
def clientList(request):
    clients = Client.objects.all()
    serializer = clientSerializer1(clients, many=True)
    return Response(serializer.data)

@api_view(['GET'])
def clientDetail(request, pk):
    clients = Client.objects.get(id=pk)
    serializer = clientSerializer1(clients, many=False)
    return Response(serializer.data)

@api_view(['POST'])
def addClient(request):
    serializer = clientSerializer2(data=request.data)
    if serializer.is_valid():
        serializer.save()
    return Response(serializer.data)

@api_view(['POST'])
def UpdateClient(request, pk):
    clients = Client.objects.get(id=pk)
    serializer = clientSerializer2(instance=clients,data=request.data)

    if serializer.is_valid():
        serializer.save()

    return Response(serializer.data)

@api_view(['DELETE'])
def DeleteClient(request, pk):
    clients = Client.objects.get(id=pk)
    clients.delete()
    return Response("Client succesfully delete!")