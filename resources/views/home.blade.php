<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucas Morgado</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-dark">
    <header class="bg-gradi borda">    
        <div class="logo d-flex justify-content-center py-3">
            <img src="{{ url('images/logo.svg') }}">        
        </div>
    </header>

    <section class="skill-dev container">
        <h2 class="text-center text-white fw-normal mt-5 fs-2">Developer Skills</h2>

        <div class="skill-list d-flex justify-content-center flex-wrap">
            <div class="m-3 bg-clean skill">
                <figure class="ic-html"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">HTML</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-css"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">CSS</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-js"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">JavaScript</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-bootstrap"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Bootstrap</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-git"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Git</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-github"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Github</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-java"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Java</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-php"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">PHP</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-laravel"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Laravel</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-composer"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Composer</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-sql"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">SQL</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-npm"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">NPM</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-firebase"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Firebase</h4>
            </div>
            <div class="m-3 bg-clean skill">
                <figure class="ic-oop"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">OOP</h4>
            </div>
        </div>
    </section>

     <section class="skill-des container">
        <h2 class="text-center text-white fw-normal mt-5 fs-2">Designer Skills</h2>

        <div class="skill-list d-flex justify-content-center flex-wrap">
            <div class="m-3 bg-clean skill">
                <figure class="ic-illustrator"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Illustrator</h4>
            </div>
             <div class="m-3 bg-clean skill">
                <figure class="ic-photoshop"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Photoshop</h4>
            </div>
             <div class="m-3 bg-clean skill">
                <figure class="ic-coreldraw"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">Corel Draw</h4>
            </div>
             <div class="m-3 bg-clean skill">
                <figure class="ic-3dsmax"></figure>
                <h4 class="text-center text-white fw-light fs-4 py-2">3dsmax</h4>
            </div>
        </div>
    </section>

      <section class="projects container">
        <h2 class="text-center text-white fw-normal mt-5 fs-2">Project</h2>

        <div class="d-flex justify-content-center flex-wrap">
            <div class="project">
                <img src="{{ asset('images/mega.svg') }}">
            </div>
        </div>
    </section>
</body>

</html>