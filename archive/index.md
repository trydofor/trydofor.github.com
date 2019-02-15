---
layout: home
category: archive
permalink: /index.html
title: "just try & do ... for ..."
excerpt: "$implicity is everything, since valentine's day 2004."
feature: lace/1200x600-dark.jpg
---

<div class="tiles">


{% assign lmtshow = 8 %}
{% assign lmtstar = 4 %}
{% assign tagstar = '$' %}
{% assign catshow = '2x,3x,4x' %}

{% assign cntstar = site.tags[tagstar] | size %} 
{% if cntstar > lmtstar %}{% assign cntstar = lmtstar %}{% endif %}
{% assign cntnorm = lmtshow  | minus: cntstar %} 

{% assign counter = 1 %} 
{% for post in site.posts %}
    {% if counter > cntnorm %} {% break %} {% endif %}
    {% if post.tags contains tagstar %} {% continue %} {% endif %}
    {% unless catshow contains post.category %} {% continue %} {% endunless %}
    {% assign counter = counter | plus:1 %} 
{% include post-arrow.html %}
{% endfor %}

{% for post in site.tags[tagstar] limit: cntstar %}
{% include post-arrow.html %}
{% endfor %}
</div>


