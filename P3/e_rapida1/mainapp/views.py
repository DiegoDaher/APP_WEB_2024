from django.shortcuts import render


# Create your views here.
def index(request):
    return render(request,'mainapp/index.html',{
        'title':'Inicio',
        'content':'.:: ¡ Bienvenido a mi página de inicio !::.'
    })

def about(request):
    return render(request,'mainapp/about.html',{
        'title':'Sobre Nosotros',
        'content':'Somos una página enfocada a la educacion desde la Universidad Teconologica de Durango'
    })
def mision(request):
    return render(request,'mainapp/mision.html',{
        'title':'Mision',
        'content':'Ayudara a los estudiantes a encontrar las herramientas necesaria para su carrera'
    })
def vision(request):
    return render(request,'mainapp/vision.html',{
        'title':'Vision',
        'content':'Mejorar con la educacion el futuro del pais'
    })

def error404(request,exception):
    return render(request,'errors/error404.html',{
    })
    