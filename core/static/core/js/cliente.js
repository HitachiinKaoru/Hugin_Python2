class cliente{
    Motivo_Consulta;
    Nombre_Cliente;
    Correo;
    Mensaje;
   
    setMotivo(mot){this.Motivo_Consulta=mot;}
    setNombre(nom){this.Nombre_Cliente=nom;}
    setCorreo(cor){this.Correo=cor;}
    setMensaje(mj){this.Mensaje=mj;}
    
    getMotivo(){return this.Motivo_Consulta;}
    getNombre(){return this.Nombre_Cliente;}
    getCorreo(){return this.Correo;}
    getMensaje(){return this.Mensaje}
    
    imprimirCliente(){
        return "Motivo Contacto: "+this.getMotivo()+" Nombre Cliente: "+this.getNombre()+" Correo: "+this.getCorreo()+
        " Comentario: "+this.getMensaje();
    }
}