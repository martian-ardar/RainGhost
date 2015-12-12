import json
from django.shortcuts import get_object_or_404, render, render_to_response
from django.http import HttpResponseRedirect
from django.http import HttpResponse
from django.core.urlresolvers import reverse
from django.views import generic
from django.core import serializers
from django.core.serializers.json import DjangoJSONEncoder

from .models import Choice, Question, myUser

class IndexView(generic.ListView):
    template_name = 'index/index.html'
    context_object_name = 'varForTemplate'

    def get_queryset(self):
        queryset = myUser.objects.all().values()
        print queryset
        return queryset


def getQuestionData(request):
    data = []
    queryset = Question.objects.order_by('-pub_date')[:5].values()
    print queryset
    for item in queryset:
        dict = {}
        for k, v in item.items():
            dict[k] = str(v)
            data.append(dict)

    return HttpResponse(json.dumps(data, cls=DjangoJSONEncoder), content_type="application/json")


class DetailView(generic.DetailView):
    model = Question
    template_name = 'index/detail.html'


class ResultsView(generic.DetailView):
    model = Question
    template_name = 'index/results.html'


def vote(request, question_id):
    p = get_object_or_404(Question, pk=question_id)
    try:
        selected_choice = p.choice_set.get(pk=request.POST['choice'])
    except (KeyError, Choice.DoesNotExist):
        # Redisplay the question voting form.
        return render(request, 'index/detail.html', {
            'question': p,
            'error_message': "You didn't select a choice.",
        })
    else:
        selected_choice.votes += 1
        selected_choice.save()
        # Always return an HttpResponseRedirect after successfully dealing
        # with POST data. This prevents data from being posted twice if a
        # user hits the Back button.
        return HttpResponseRedirect(reverse('index:results', args=(p.id,)))

# Create your views here.
