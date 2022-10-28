from django.db import models
from clients.models import Client
from employes.models import Employe
from django.contrib.auth.models import User
from users.models import NewUser


# Create your models here.
class Prestation(models.Model):
    nomPrestation = models.CharField(max_length=200)
    heureArrivee = models.TimeField(auto_now_add=True, null=True)
    heureDepart = models.TimeField(auto_now_add=True, null=True)
    ref_employe = models.ForeignKey(Employe, null=True, on_delete=models.SET_NULL)
    ref_client = models.ForeignKey(Client, null=True, on_delete=models.SET_NULL)
    created = models.DateTimeField(auto_now_add=True, null=True)
    commentaire = models.CharField(max_length=1000, null=True)
    create_by = models.ForeignKey(NewUser, related_name='prestations', on_delete=models.CASCADE, null=True)

    class Meta:
        ordering = ['created']

    def __str__(self):
        return str(self.nomPrestation)
