from rest_framework import serializers
from .models import Employe
from django.contrib.auth.models import User


class EmployeLoginSerializer (serializers.ModelSerializer):

    class Meta:
        model = Employe
        fields = ['emailEmploye','mdpEmploye','token']

        read_only_fields = ['token']


class employeSerializer2(serializers.ModelSerializer):
    class Meta:
        model = Employe
        fields = ['prenomEmploye', 'nomEmploye', 'emailEmploye', 'telEmploye']


class employeSerializer1(serializers.ModelSerializer):
    class Meta:
        model = Employe
        fields = '__all__'


class employeSerializer3(serializers.ModelSerializer):
    class Meta:
        model = Employe
        fields = ['prenomEmploye', 'nomEmploye']


