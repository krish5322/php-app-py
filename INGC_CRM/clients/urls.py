from django.urls import path
from . import views


urlpatterns = [
    path('', views.homeClient),


    path('clientAPI-list/', views.clientList),
    path('clientAPI-detail/<str:pk>/', views.clientDetail),
    path('addClient/', views.addClient),
    path('updateClient/<str:pk>/', views.UpdateClient),
    path('deleteClient/<str:pk>/', views.DeleteClient)
]
