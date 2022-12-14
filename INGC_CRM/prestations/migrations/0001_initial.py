# Generated by Django 4.0 on 2022-04-12 08:40

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        ('employes', '0001_initial'),
        ('clients', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Prestation',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nomPrestation', models.CharField(max_length=200)),
                ('heureArrivee', models.TimeField(auto_now_add=True, null=True)),
                ('heureDepart', models.TimeField(auto_now_add=True, null=True)),
                ('created', models.DateTimeField(auto_now_add=True, null=True)),
                ('commentaire', models.CharField(max_length=1000, null=True)),
                ('ref_client', models.ForeignKey(null=True, on_delete=django.db.models.deletion.SET_NULL, to='clients.client')),
                ('ref_employe', models.ForeignKey(null=True, on_delete=django.db.models.deletion.SET_NULL, to='employes.employe')),
            ],
            options={
                'ordering': ['created'],
            },
        ),
    ]
