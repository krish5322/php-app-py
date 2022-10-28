from django.shortcuts import render
from django.http import HttpResponse
from django.contrib.auth import authenticate
from employes.models import Employe

from rest_framework.views import APIView
from rest_framework.decorators import api_view
from rest_framework.response import Response
from rest_framework.generics import GenericAPIView
from rest_framework import status
from .serializers import employeSerializer2, employeSerializer1, EmployeLoginSerializer


# Create your views here.


def homeEmploye(request):
    employe = Employe.objects.all()
    context = {'employes': employe}
    return render(request, 'employes/employes.html', context)


class LoginEmploye(GenericAPIView):
    serializer_class = EmployeLoginSerializer

    def post(self, request):
        email = request.data.get('emailEmploye', None)
        mdp = request.data.get('mdpEmploye', None)

        user = authenticate(username=email, password=mdp)

        if user:
            serializer=self.serializer_class(user)

            return Response(serializer.data, status=status.HTTP_200_OK)

        return Response({'message':"Invalid credentials, try again"}, status=status.HTTP_401_UNAUTHORIZED)


@api_view(['GET'])
def employeList(request):
    employes = Employe.objects.all()
    serializer = employeSerializer1(employes, many=True)
    return Response(serializer.data)


@api_view(['GET'])
def employeDetail(request, pk):
    employes = Employe.objects.get(id=pk)
    serializer = employeSerializer1(employes, many=False)
    return Response(serializer.data)


@api_view(['POST'])
def addEmploye(request):
    serializer = employeSerializer2(data=request.data)
    if serializer.is_valid():
        serializer.save()
    return Response(serializer.data)


@api_view(['POST'])
def UpdateEmploye(request, pk):
    employes = Employe.objects.get(id=pk)
    serializer = employeSerializer2(data=request.data)

    if serializer.is_valid():
        serializer.save()

    return Response(serializer.data)


@api_view(['DELETE'])
def DeleteEmploye(request, pk):
    employes = Employe.objects.get(id=pk)
    employes.delete()
    return Response("Employe succesfully delete!")
