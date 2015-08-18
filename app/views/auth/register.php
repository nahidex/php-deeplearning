{% extends 'templates/default.php' %}
{% block title %}
Register
{% endblock %}
{% block content %}
<form action="{{ urlFor('register.post') }}" method="post" autocomplete="off">
    <p>
        <label for="email">Email</label>
        <input type="text" name="email" id="emaill" {% if request.post('email') %} value="{{ request.post('email')}}" {% endif %}/>
        {% if errors.first('email') %} {{ errors.first('email')}} {% endif %}
    </p>

    <p>
        <label for="username">Username</label>
        <input type="text" name="username" id="username"/>
        {% if errors.first('username') %} {{ errors.first('username')}} {% endif %}

    </p>

    <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"/>
        {% if errors.first('password') %} {{ errors.first('password')}} {% endif %}

    </p>

    <p>
        <label for="password_confrim">Confirm Password</label>
        <input type="password" name="password_confrim" id="password_confrim"/>
        {% if errors.first('password_confirm') %} {{ errors.first('password_confirm')}} {% endif %}

    </p>

    <p>
        <input type="submit" value="Submit"/>
    </p>

</form>
{% endblock %}


