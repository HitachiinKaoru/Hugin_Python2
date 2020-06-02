from django.http import HttpResponse
from django.shortcuts import render
from .models import *
from .forms import *


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

#nuevo------------------
def agendarHora(request):
    agenda = Atencion.objects.all()
    if request.POST:
        rute = request.POST.get("txtRut")
        fecha = request.POST.get("txtFecha")
        hora = request.POST.get("txtHora")
        motivo = request.POST.get("txtMensaje")

        agendar = Atencion(
            numero_atencion = '',
            fecha_atencion = fecha,
            hora_atecion = hora,
            descripcion = motivo,
            rut_paciente = rute,
            alergias = '',
            rut = '',
            id_grupo = '',
            estado = ''
        )
        agendar.save()
        return render(request, 'core/agendarHora.html', {'lista':agenda, 'msg':'Su hora fue agendada con exito','sw':True})
    return render(request, 'core/index.html')
    
