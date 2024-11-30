
from django.contrib import admin
from django.urls import path
from mainapp import views
from django.conf.urls import handler404

urlpatterns = [
    path('inicio/', views.index,name='index'),
    path('', views.index,name='index'),
    path('about/', views.about,name='about'),
    path('mision/', views.mision,name='mision'),
    path('vision/', views.vision,name='vision'),
    path('registrar/', views.registrar,name='registrar'),
    path('iniciar/', views.iniciar,name='iniciar'),
]

handler404 = views.error404
