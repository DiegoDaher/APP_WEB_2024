from django.shortcuts import render

# Create your views here.

def index(request):
    return render(request,'mainapp/index.html',{
        'title':'Inicio | Página Principal',
        'content':'.:: ¡ Bienvenido a mi página principal !::.'
    })
def about(request):
    return render(request,'mainapp/about.html',{
        'title':'Acerca de',
        'content':'.:: ¡ Somos un equipo de desarrollo de Desarrollo de Sw con Django ::.'
    })
    
def mision(request):
    return render(request,'mainapp/mision.html',{
        'title':'Mision'
    })
def vision(request):
    return render(request,'mainapp/vision.html',{
        'title':'Vision'
    })