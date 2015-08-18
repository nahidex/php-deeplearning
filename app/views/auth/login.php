{% extends 'templates/default.php' %}
{% block title %}
Login
{% endblock %}
{% block content %}
<form action="{{ urlFor('login.post') }}" method="post" autocomplete="off">
    <p>
        <label for="identifier">Username/Email</label>
        <input type="text" name="identifier" id="identifier"/>
        {% if errors.first('identifier') %} {{errors.first('identifier')}} {% endif %}
    </p>

    <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"/>
        {% if errors.first('password') %} {{errors.first('password')}} {% endif %}

    </p>

    <p>
        <input type="submit" value="Login"/>
    </p>
</form>
{% endblock %}