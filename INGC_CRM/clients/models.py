from django.db import models
import qrcode
from io import BytesIO
from django.core.files import File
from PIL import Image, ImageDraw


# Create your models here.

class Client(models.Model):
    prenomClient = models.CharField(max_length=200, null=True)
    nomClient = models.CharField(max_length=200, null=True)
    ageClient = models.IntegerField(null=True)
    emailClient = models.CharField(max_length=200, null=True)
    telClient = models.CharField(max_length=15, null=True)
    rueClient = models.CharField(max_length=60, null=True)
    complementAdresseClient = models.CharField(max_length=100, null=True)
    villeClient = models.CharField(max_length=200, null=True)
    cpClient = models.CharField(max_length=8, null=True)
    qr_code = models.ImageField(upload_to='qr_codes', null=True)
    codeClient = models.CharField(max_length=50, blank=True)

    def __str__(self):
        mot = str(self.prenomClient + "\n")
        mot = mot + str(self.nomClient)
        return mot

    def save(self, *args, **kwargs):
        self.codeClient = self.nomClient + self.prenomClient + self.cpClient
        qrcode_img = qrcode.make(self.codeClient)
        canvas = Image.new('RGB', (290, 290), 'white')
        draw = ImageDraw.Draw(canvas)
        canvas.paste(qrcode_img)
        fname = f'{self.nomClient}.png'
        buffer = BytesIO()
        canvas.save(buffer, 'PNG')
        self.qr_code.save(fname, File(buffer), save=False)
        canvas.close()
        super().save(*args, **kwargs)


