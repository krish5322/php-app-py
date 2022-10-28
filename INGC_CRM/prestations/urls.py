from django.urls import path
from . import views
from rest_framework.decorators import api_view
from rest_framework.urlpatterns import format_suffix_patterns


urlpatterns = format_suffix_patterns([
    path('', views.home),
    path('prestations/', views.prestation),


    path('prestationAPI/', views.prestationOverview),
    path('prestationAPI-list/', views.prestationList),
    path('prestationAPI-detail/<str:pk>/', views.prestationDetail),
    path('addPrestation/', views.addPrestation),
    path('updatePrestation/<str:pk>/', views.UpdatePrestation),
    path('deletePrestation/<str:pk>/', views.DeletePrestation),

    path('prestation/', views.PrestationList.as_view(), name='prestations-list'),
    path('prestation/<int:pk>', views.PrestationDetail.as_view(), name='prestations-detail'),
    path('users/', views.UserList.as_view(), name='users-list'),
    path('users/<int:pk>/', views.UserDetail.as_view(), name='users-detail'),
    path('api/', views.api_root)

])

