from django.contrib import admin
from django.urls import path,include
from .views import *
from core import views

urlpatterns = [
    path('', home,name='HOME'),
    path('promociones/',promociones,name='PROMOCIONES'),
    path('quinessomos/',quinessomos,name='QUIENESSOMOS'),
    path('tratamientos/',tratamientos,name='TRATAMIENTO'),
    path('ubicacion/',ubicacion,name='UBICACION'),
]