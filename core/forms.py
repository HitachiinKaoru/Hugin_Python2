from django import forms
from django.forms import ModelForm
from .models import Atencion

class AtencionForm(ModelForm):
    class Meta:
        model = Atencion
        fields = ['fecha_atencion','hora_atencion', 'descripcion','rut_paciente']