class producto{
    codigo;
    nombreProducto;
    descripcion;
    precio;
   
    setCodigo(cod){this.codigo=cod;}
    setNombreProducto(nomP){this.nombreProducto=nomP;}
    setDescripcion(des){this.descripcion=des;}
    setPrecio(p){this.precio=p;}
    
    getCodigo(){return this.codigo;}
    getNombreProducto(){return this.nombreProducto;}
    getDescripcion(){return this.descripcion;}
    getPrecio(){return this.precio}
    
    imprimirProducto(){
        return "Código: "+this.getCodigo()+" Nombre Producto: "+this.getNombreProducto()+" Descripción: "+this.getDescripcion()+
        " Precio: $"+this.getPrecio();
    }
}