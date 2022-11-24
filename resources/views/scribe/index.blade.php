<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:8003";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.6.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-auth" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth">
                    <a href="#auth">Auth</a>
                </li>
                                    <ul id="tocify-subheader-auth" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-POSTapi-auth-register">
                                <a href="#auth-POSTapi-auth-register">Registra um novo Gerente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-auth-login">
                                <a href="#auth-POSTapi-auth-login">Login Gerente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-GETapi-me">
                                <a href="#auth-GETapi-me">Dados gerente logado</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-auth-logout">
                                <a href="#auth-POSTapi-auth-logout">Logout gerente</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-gerentes" class="tocify-header">
                <li class="tocify-item level-1" data-unique="gerentes">
                    <a href="#gerentes">Gerentes</a>
                </li>
                                    <ul id="tocify-subheader-gerentes" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="gerentes-GETapi-manager">
                                <a href="#gerentes-GETapi-manager">Listar Gerentes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="gerentes-GETapi-manager--id-">
                                <a href="#gerentes-GETapi-manager--id-">Detalhar Gerente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="gerentes-PUTapi-manager--id-">
                                <a href="#gerentes-PUTapi-manager--id-">Atualizar Gerente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="gerentes-DELETEapi-manager--id-">
                                <a href="#gerentes-DELETEapi-manager--id-">Remover um Gerente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="gerentes-POSTapi-manager-insert-client-group">
                                <a href="#gerentes-POSTapi-manager-insert-client-group">Inserir Cliente a grupo</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-clientes" class="tocify-header">
                <li class="tocify-item level-1" data-unique="clientes">
                    <a href="#clientes">Clientes</a>
                </li>
                                    <ul id="tocify-subheader-clientes" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="clientes-GETapi-client">
                                <a href="#clientes-GETapi-client">Listar Clientes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="clientes-POSTapi-client">
                                <a href="#clientes-POSTapi-client">Cadastrar Cliente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="clientes-GETapi-client--id-">
                                <a href="#clientes-GETapi-client--id-">Detalhar Cliente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="clientes-PUTapi-client--id-">
                                <a href="#clientes-PUTapi-client--id-">Atualizar Cliente</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="clientes-DELETEapi-client--id-">
                                <a href="#clientes-DELETEapi-client--id-">Remover um Cliente</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-grupos" class="tocify-header">
                <li class="tocify-item level-1" data-unique="grupos">
                    <a href="#grupos">Grupos</a>
                </li>
                                    <ul id="tocify-subheader-grupos" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="grupos-GETapi-group">
                                <a href="#grupos-GETapi-group">Listar Grupos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="grupos-POSTapi-group">
                                <a href="#grupos-POSTapi-group">Cadastrar Grupo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="grupos-GETapi-group--id-">
                                <a href="#grupos-GETapi-group--id-">Detalhar Grupo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="grupos-PUTapi-group--id-">
                                <a href="#grupos-PUTapi-group--id-">Atualiza Grupo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="grupos-DELETEapi-group--id-">
                                <a href="#grupos-DELETEapi-group--id-">Remover um Grupo</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 24, 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8003</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="auth">Auth</h1>

    

                                <h2 id="auth-POSTapi-auth-register">Registra um novo Gerente</h2>

<p>
</p>

<p>Efutua o registro de um no gerente com seu nível já definido</p>

<span id="example-requests-POSTapi-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8003/api/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"JOSÉ DA SILVA\",
    \"email\": \"jose.silva@drugovich.com\",
    \"password\": \"abc123456\",
    \"password_confirmation\": \"abc123456\",
    \"level\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "JOSÉ DA SILVA",
    "email": "jose.silva@drugovich.com",
    "password": "abc123456",
    "password_confirmation": "abc123456",
    "level": 1
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;Success&quot;,
    &quot;message&quot;: null,
    &quot;data&quot;: {
        &quot;user&quot;: {
            &quot;name&quot;: &quot;Marcio&quot;,
            &quot;manager_id&quot;: 3,
            &quot;email&quot;: &quot;marcio@gmail.com&quot;,
            &quot;updated_at&quot;: &quot;2022-11-24T09:11:45.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-11-24T09:11:45.000000Z&quot;,
            &quot;id&quot;: 3
        },
        &quot;token&quot;: &quot;12|oMh3r1WmJGXsbqJp3H2Fgs0ZT9ACPlU3khs1AtzW&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-register" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-register"></code></pre>
</span>
<form id="form-POSTapi-auth-register" data-method="POST"
      data-path="api/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-register"
                    onclick="tryItOut('POSTapi-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-register"
                    onclick="cancelTryOut('POSTapi-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="name"                data-endpoint="POSTapi-auth-register"
               value="JOSÉ DA SILVA"
               data-component="body" hidden>
    <br>
<p>O nome do gerente. O campo value não pode ser superior a 255 caracteres. Example: <code>JOSÉ DA SILVA</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"                data-endpoint="POSTapi-auth-register"
               value="jose.silva@drugovich.com"
               data-component="body" hidden>
    <br>
<p>E-mail do gerente. O campo value deve ser um endereço de e-mail válido. Example: <code>jose.silva@drugovich.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"                data-endpoint="POSTapi-auth-register"
               value="abc123456"
               data-component="body" hidden>
    <br>
<p>Senha do gerente. O campo value deve ter pelo menos 6 caracteres. Example: <code>abc123456</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password_confirmation"                data-endpoint="POSTapi-auth-register"
               value="abc123456"
               data-component="body" hidden>
    <br>
<p>Senha do gerente deve ser enviada duas vezes para confirmação. Example: <code>abc123456</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>level</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="level"                data-endpoint="POSTapi-auth-register"
               value="1"
               data-component="body" hidden>
    <br>
<p>Nivel de acesso do gerente dentro do sistema, sendo possível nível 1 ou 2. Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="auth-POSTapi-auth-login">Login Gerente</h2>

<p>
</p>

<p>Efetua login de um gerente</p>

<span id="example-requests-POSTapi-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8003/api/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"stanton.anastacio@example.com\",
    \"password\": \"mKk.H\\\\:8H0jqOeXjt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "stanton.anastacio@example.com",
    "password": "mKk.H\\:8H0jqOeXjt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;success&quot;,
    &quot;token&quot;: &quot;15|98SpGx0PUM79g1ZR5AOUacKW2ASCt0JbdokROPCp&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login"></code></pre>
</span>
<form id="form-POSTapi-auth-login" data-method="POST"
      data-path="api/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-login"
                    onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-login"
                    onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"                data-endpoint="POSTapi-auth-login"
               value="stanton.anastacio@example.com"
               data-component="body" hidden>
    <br>
<p>O campo value deve ser um endereço de e-mail válido. Example: <code>stanton.anastacio@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"                data-endpoint="POSTapi-auth-login"
               value="mKk.H\:8H0jqOeXjt"
               data-component="body" hidden>
    <br>
<p>O campo value deve ter pelo menos 6 caracteres. Example: <code>mKk.H\:8H0jqOeXjt</code></p>
        </div>
        </form>

                    <h2 id="auth-GETapi-me">Dados gerente logado</h2>

<p>
</p>

<p>Retorna os dados do gerente logado</p>

<span id="example-requests-GETapi-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8003/api/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-me">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;identify&quot;: 2,
        &quot;nome&quot;: &quot;carlos&quot;,
        &quot;email&quot;: &quot;carlos@gmail.com&quot;,
        &quot;nivel&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-me" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-me"></code></pre>
</span>
<form id="form-GETapi-me" data-method="GET"
      data-path="api/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-me"
                    onclick="tryItOut('GETapi-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-me"
                    onclick="cancelTryOut('GETapi-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-me" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="auth-POSTapi-auth-logout">Logout gerente</h2>

<p>
</p>

<p>Efetua o logout do gerente</p>

<span id="example-requests-POSTapi-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8003/api/auth/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/auth/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Token Removido&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-logout" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-logout"></code></pre>
</span>
<form id="form-POSTapi-auth-logout" data-method="POST"
      data-path="api/auth/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-logout"
                    onclick="tryItOut('POSTapi-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-logout"
                    onclick="cancelTryOut('POSTapi-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="gerentes">Gerentes</h1>

    

                                <h2 id="gerentes-GETapi-manager">Listar Gerentes</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Lista todos gerentes cadastrados</p>

<span id="example-requests-GETapi-manager">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8003/api/manager" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/manager"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-manager">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;identify&quot;: 1,
            &quot;nome&quot;: &quot;fabio&quot;,
            &quot;email&quot;: &quot;fabio@gmail.com&quot;,
            &quot;nivel&quot;: 2
        },
        {
            &quot;identify&quot;: 2,
            &quot;nome&quot;: &quot;carlos&quot;,
            &quot;email&quot;: &quot;carlos@gmail.com&quot;,
            &quot;nivel&quot;: 1
        },
        {
            &quot;identify&quot;: 3,
            &quot;nome&quot;: &quot;Marcio&quot;,
            &quot;email&quot;: &quot;marcio@gmail.com&quot;,
            &quot;nivel&quot;: 1
        },
        {
            &quot;identify&quot;: 4,
            &quot;nome&quot;: &quot;Marlon&quot;,
            &quot;email&quot;: &quot;marlon@gmail.com&quot;,
            &quot;nivel&quot;: 1
        },
        {
            &quot;identify&quot;: 5,
            &quot;nome&quot;: &quot;JOS&Eacute; DA SILVA&quot;,
            &quot;email&quot;: &quot;jose.silva@drugovich.com&quot;,
            &quot;nivel&quot;: 1
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-manager" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-manager"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-manager" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-manager" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-manager"></code></pre>
</span>
<form id="form-GETapi-manager" data-method="GET"
      data-path="api/manager"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-manager', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-manager"
                    onclick="tryItOut('GETapi-manager');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-manager"
                    onclick="cancelTryOut('GETapi-manager');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-manager" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/manager</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-manager"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="GETapi-manager"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="GETapi-manager"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="gerentes-GETapi-manager--id-">Detalhar Gerente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Detalha os dados de um gerente</p>

<span id="example-requests-GETapi-manager--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8003/api/manager/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/manager/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-manager--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;identify&quot;: 2,
        &quot;nome&quot;: &quot;carlos&quot;,
        &quot;email&quot;: &quot;carlos@gmail.com&quot;,
        &quot;nivel&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-manager--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-manager--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-manager--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-manager--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-manager--id-"></code></pre>
</span>
<form id="form-GETapi-manager--id-" data-method="GET"
      data-path="api/manager/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-manager--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-manager--id-"
                    onclick="tryItOut('GETapi-manager--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-manager--id-"
                    onclick="cancelTryOut('GETapi-manager--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-manager--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/manager/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-manager--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="GETapi-manager--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="GETapi-manager--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"                data-endpoint="GETapi-manager--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the manager. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="gerentes-PUTapi-manager--id-">Atualizar Gerente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Atualiza os dados de um gerente</p>

<span id="example-requests-PUTapi-manager--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8003/api/manager/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/manager/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-manager--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;identify&quot;: 2,
        &quot;nome&quot;: &quot;carlos&quot;,
        &quot;email&quot;: &quot;carlos@gmail.com&quot;,
        &quot;nivel&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-manager--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-manager--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-manager--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-manager--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-manager--id-"></code></pre>
</span>
<form id="form-PUTapi-manager--id-" data-method="PUT"
      data-path="api/manager/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-manager--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-manager--id-"
                    onclick="tryItOut('PUTapi-manager--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-manager--id-"
                    onclick="cancelTryOut('PUTapi-manager--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-manager--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/manager/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/manager/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-manager--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="PUTapi-manager--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="PUTapi-manager--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"                data-endpoint="PUTapi-manager--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the manager. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="gerentes-DELETEapi-manager--id-">Remover um Gerente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Efetua a remoção dos dados de um gerente</p>

<span id="example-requests-DELETEapi-manager--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8003/api/manager/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/manager/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-manager--id-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-manager--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-manager--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-manager--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-manager--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-manager--id-"></code></pre>
</span>
<form id="form-DELETEapi-manager--id-" data-method="DELETE"
      data-path="api/manager/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-manager--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-manager--id-"
                    onclick="tryItOut('DELETEapi-manager--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-manager--id-"
                    onclick="cancelTryOut('DELETEapi-manager--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-manager--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/manager/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-manager--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="DELETEapi-manager--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="DELETEapi-manager--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"                data-endpoint="DELETEapi-manager--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the manager. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="gerentes-POSTapi-manager-insert-client-group">Inserir Cliente a grupo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Cadastra um cliente a um grupo</p>

<span id="example-requests-POSTapi-manager-insert-client-group">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8003/api/manager/insert-client-group" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"client_id\": 5,
    \"group_id\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/manager/insert-client-group"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "client_id": 5,
    "group_id": 1
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-manager-insert-client-group">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">Response/gerentes/</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-manager-insert-client-group" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-manager-insert-client-group"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-manager-insert-client-group" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-manager-insert-client-group" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-manager-insert-client-group"></code></pre>
</span>
<form id="form-POSTapi-manager-insert-client-group" data-method="POST"
      data-path="api/manager/insert-client-group"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-manager-insert-client-group', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-manager-insert-client-group"
                    onclick="tryItOut('POSTapi-manager-insert-client-group');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-manager-insert-client-group"
                    onclick="cancelTryOut('POSTapi-manager-insert-client-group');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-manager-insert-client-group" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/manager/insert-client-group</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-manager-insert-client-group"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-manager-insert-client-group"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-manager-insert-client-group"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="client_id"                data-endpoint="POSTapi-manager-insert-client-group"
               value="5"
               data-component="body" hidden>
    <br>
<p>ID do cliente que desej associar. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>group_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="group_id"                data-endpoint="POSTapi-manager-insert-client-group"
               value="1"
               data-component="body" hidden>
    <br>
<p>ID do grupo que deseja associar. Example: <code>1</code></p>
        </div>
        </form>

                <h1 id="clientes">Clientes</h1>

    

                                <h2 id="clientes-GETapi-client">Listar Clientes</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Lista todos clientes cadastrados</p>

<span id="example-requests-GETapi-client">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8003/api/client" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/client"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-client">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;identify&quot;: 5,
            &quot;nome&quot;: &quot;Junior Filho&quot;,
            &quot;cnpj&quot;: &quot;37.320.950/0001-53&quot;,
            &quot;data_fundacao&quot;: &quot;24-11-2022&quot;
        },
        {
            &quot;identify&quot;: 6,
            &quot;nome&quot;: &quot;Carlos Henrique&quot;,
            &quot;cnpj&quot;: &quot;37.320.950/0002-53&quot;,
            &quot;data_fundacao&quot;: &quot;24-11-2022&quot;
        },
        {
            &quot;identify&quot;: 7,
            &quot;nome&quot;: &quot;Jose Alencar&quot;,
            &quot;cnpj&quot;: &quot;37.320.950/0005-53&quot;,
            &quot;data_fundacao&quot;: &quot;24-11-2022&quot;
        },
        {
            &quot;identify&quot;: 8,
            &quot;nome&quot;: &quot;Gabriel Pereira&quot;,
            &quot;cnpj&quot;: &quot;37.320.950/0008-53&quot;,
            &quot;data_fundacao&quot;: &quot;24-11-2022&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-client" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-client"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-client" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client"></code></pre>
</span>
<form id="form-GETapi-client" data-method="GET"
      data-path="api/client"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-client', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-client"
                    onclick="tryItOut('GETapi-client');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-client"
                    onclick="cancelTryOut('GETapi-client');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-client" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/client</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-client"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="GETapi-client"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="GETapi-client"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="clientes-POSTapi-client">Cadastrar Cliente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Efetua o cadastro de um novo cliente</p>

<span id="example-requests-POSTapi-client">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8003/api/client" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Fabio Lima\",
    \"cnpj\": \"44.954.151\\/0001-54\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/client"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Fabio Lima",
    "cnpj": "44.954.151\/0001-54"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-client">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;identify&quot;: 8,
        &quot;nome&quot;: &quot;Gabriel Pereira&quot;,
        &quot;cnpj&quot;: &quot;37.320.950/0008-53&quot;,
        &quot;data_fundacao&quot;: &quot;24-11-2022&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-client" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-client"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-client" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-client" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-client"></code></pre>
</span>
<form id="form-POSTapi-client" data-method="POST"
      data-path="api/client"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-client', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-client"
                    onclick="tryItOut('POSTapi-client');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-client"
                    onclick="cancelTryOut('POSTapi-client');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-client" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/client</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-client"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-client"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-client"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="name"                data-endpoint="POSTapi-client"
               value="Fabio Lima"
               data-component="body" hidden>
    <br>
<p>O nome do cliente. Example: <code>Fabio Lima</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cnpj</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="cnpj"                data-endpoint="POSTapi-client"
               value="44.954.151/0001-54"
               data-component="body" hidden>
    <br>
<p>CNPJ completo do cliente. Example: <code>44.954.151/0001-54</code></p>
        </div>
        </form>

                    <h2 id="clientes-GETapi-client--id-">Detalhar Cliente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Detalha os dados de um cliente</p>

<span id="example-requests-GETapi-client--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8003/api/client/6" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/client/6"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-client--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;identify&quot;: 5,
        &quot;nome&quot;: &quot;Junior Filho&quot;,
        &quot;cnpj&quot;: &quot;37.320.950/0001-53&quot;,
        &quot;data_fundacao&quot;: &quot;24-11-2022&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-client--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-client--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-client--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client--id-"></code></pre>
</span>
<form id="form-GETapi-client--id-" data-method="GET"
      data-path="api/client/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-client--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-client--id-"
                    onclick="tryItOut('GETapi-client--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-client--id-"
                    onclick="cancelTryOut('GETapi-client--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-client--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/client/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-client--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="GETapi-client--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="GETapi-client--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"                data-endpoint="GETapi-client--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the client. Example: <code>6</code></p>
            </div>
                    </form>

                    <h2 id="clientes-PUTapi-client--id-">Atualizar Cliente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Atualiza os dados de um cliente</p>

<span id="example-requests-PUTapi-client--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8003/api/client/6" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"yqkojpabjdrtxjgf\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/client/6"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "yqkojpabjdrtxjgf"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-client--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;identify&quot;: 5,
        &quot;nome&quot;: &quot;Junior Filho&quot;,
        &quot;cnpj&quot;: &quot;37.320.950/0001-53&quot;,
        &quot;data_fundacao&quot;: &quot;24-11-2022&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-client--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-client--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-client--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-client--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-client--id-"></code></pre>
</span>
<form id="form-PUTapi-client--id-" data-method="PUT"
      data-path="api/client/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-client--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-client--id-"
                    onclick="tryItOut('PUTapi-client--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-client--id-"
                    onclick="cancelTryOut('PUTapi-client--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-client--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/client/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/client/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-client--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="PUTapi-client--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="PUTapi-client--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"                data-endpoint="PUTapi-client--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the client. Example: <code>6</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text"
               name="name"                data-endpoint="PUTapi-client--id-"
               value="yqkojpabjdrtxjgf"
               data-component="body" hidden>
    <br>
<p>O campo value deve ter pelo menos 3 caracteres. O campo value não pode ser superior a 100 caracteres. Example: <code>yqkojpabjdrtxjgf</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cnpj</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text"
               name="cnpj"                data-endpoint="PUTapi-client--id-"
               value=""
               data-component="body" hidden>
    <br>

        </div>
        </form>

                    <h2 id="clientes-DELETEapi-client--id-">Remover um Cliente</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Efetua a remoção de um cliente</p>

<span id="example-requests-DELETEapi-client--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8003/api/client/6" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/client/6"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-client--id-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-client--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-client--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-client--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-client--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-client--id-"></code></pre>
</span>
<form id="form-DELETEapi-client--id-" data-method="DELETE"
      data-path="api/client/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-client--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-client--id-"
                    onclick="tryItOut('DELETEapi-client--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-client--id-"
                    onclick="cancelTryOut('DELETEapi-client--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-client--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/client/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-client--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="DELETEapi-client--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="DELETEapi-client--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"                data-endpoint="DELETEapi-client--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the client. Example: <code>6</code></p>
            </div>
                    </form>

                <h1 id="grupos">Grupos</h1>

    

                                <h2 id="grupos-GETapi-group">Listar Grupos</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Lista todos grupos cadastrados</p>

<span id="example-requests-GETapi-group">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8003/api/group" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/group"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-group">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;nome&quot;: &quot;TransIgua&ccedil;u&quot;,
            &quot;data_criacao&quot;: &quot;2022-11-23&quot;
        },
        {
            &quot;nome&quot;: &quot;TransIgua&ccedil;u&quot;,
            &quot;data_criacao&quot;: &quot;2022-11-24&quot;
        },
        {
            &quot;nome&quot;: &quot;TransNorte&quot;,
            &quot;data_criacao&quot;: &quot;2022-11-24&quot;
        },
        {
            &quot;nome&quot;: &quot;AgroFort&quot;,
            &quot;data_criacao&quot;: &quot;2022-11-24&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-group" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-group"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-group" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-group" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-group"></code></pre>
</span>
<form id="form-GETapi-group" data-method="GET"
      data-path="api/group"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-group', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-group"
                    onclick="tryItOut('GETapi-group');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-group"
                    onclick="cancelTryOut('GETapi-group');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-group" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/group</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-group"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="GETapi-group"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="GETapi-group"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="grupos-POSTapi-group">Cadastrar Grupo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Efetua o cadastro de um novo grupo</p>

<span id="example-requests-POSTapi-group">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8003/api/group" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"lizyrtncesrfsoigngacp\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/group"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "lizyrtncesrfsoigngacp"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-group">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;nome&quot;: &quot;AgroFort&quot;,
        &quot;data_criacao&quot;: &quot;2022-11-24&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-group" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-group"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-group" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-group" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-group"></code></pre>
</span>
<form id="form-POSTapi-group" data-method="POST"
      data-path="api/group"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-group', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-group"
                    onclick="tryItOut('POSTapi-group');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-group"
                    onclick="cancelTryOut('POSTapi-group');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-group" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/group</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-group"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-group"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-group"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="name"                data-endpoint="POSTapi-group"
               value="lizyrtncesrfsoigngacp"
               data-component="body" hidden>
    <br>
<p>O campo value deve ter pelo menos 3 caracteres. O campo value não pode ser superior a 50 caracteres. Example: <code>lizyrtncesrfsoigngacp</code></p>
        </div>
        </form>

                    <h2 id="grupos-GETapi-group--id-">Detalhar Grupo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Detalha os dados de um grupo</p>

<span id="example-requests-GETapi-group--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8003/api/group/2" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/group/2"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-group--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;nome&quot;: &quot;AgroFort&quot;,
        &quot;data_criacao&quot;: &quot;2022-11-24&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-group--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-group--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-group--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-group--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-group--id-"></code></pre>
</span>
<form id="form-GETapi-group--id-" data-method="GET"
      data-path="api/group/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-group--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-group--id-"
                    onclick="tryItOut('GETapi-group--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-group--id-"
                    onclick="cancelTryOut('GETapi-group--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-group--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/group/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-group--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="GETapi-group--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="GETapi-group--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"                data-endpoint="GETapi-group--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the group. Example: <code>2</code></p>
            </div>
                    </form>

                    <h2 id="grupos-PUTapi-group--id-">Atualiza Grupo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Atualiza  os dados de um grupo</p>

<span id="example-requests-PUTapi-group--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8003/api/group/2" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"est\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/group/2"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "est"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-group--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;nome&quot;: &quot;AgroFort&quot;,
        &quot;data_criacao&quot;: &quot;2022-11-24&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-group--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-group--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-group--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-group--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-group--id-"></code></pre>
</span>
<form id="form-PUTapi-group--id-" data-method="PUT"
      data-path="api/group/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-group--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-group--id-"
                    onclick="tryItOut('PUTapi-group--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-group--id-"
                    onclick="cancelTryOut('PUTapi-group--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-group--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/group/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/group/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-group--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="PUTapi-group--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="PUTapi-group--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"                data-endpoint="PUTapi-group--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the group. Example: <code>2</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="name"                data-endpoint="PUTapi-group--id-"
               value="est"
               data-component="body" hidden>
    <br>
<p>Example: <code>est</code></p>
        </div>
        </form>

                    <h2 id="grupos-DELETEapi-group--id-">Remover um Grupo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Efetua a remoção de um grupo</p>

<span id="example-requests-DELETEapi-group--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8003/api/group/2" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8003/api/group/2"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-group--id-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-group--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-group--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-group--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-group--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-group--id-"></code></pre>
</span>
<form id="form-DELETEapi-group--id-" data-method="DELETE"
      data-path="api/group/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-group--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-group--id-"
                    onclick="tryItOut('DELETEapi-group--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-group--id-"
                    onclick="cancelTryOut('DELETEapi-group--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-group--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/group/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-group--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="DELETEapi-group--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="DELETEapi-group--id-"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="id"                data-endpoint="DELETEapi-group--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the group. Example: <code>2</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
