from django.db import models
from django.contrib.auth.models import AbstractUser
import jwt
from datetime import datetime, timedelta

from django.conf import settings


# Create your models here.
class Employe(models.Model):
    prenomEmploye = models.CharField(max_length=200, null=True)
    nomEmploye = models.CharField(max_length=200, null=True)
    emailEmploye = models.CharField(max_length=200, null=True)
    telEmploye = models.CharField(max_length=200, null=True)
    mdpEmploye = models.CharField(max_length=50, null=True)

    def __str__(self):
        return self.prenomEmploye

