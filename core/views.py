from django.http import HttpResponse
from django.shortcuts import render

# Create your views here.
def home(request):
    return render(request, 'core/index.html')

def promociones(request):
    return render(request, 'core/promociones.html')

def quinessomos(request):
    return render(request, 'core/quienessomos.html')

def tratamientos(request):
    return render(request, 'core/tratamiento.html')

def ubicacion(request):
    return render(request, 'core/ubicacion.html')
    
