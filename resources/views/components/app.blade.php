<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>IRPG Toolbox</title>
</head>
<body>
<x-navbar/>
<div class="container-fluid container-lg mt-3">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-light">
                <div class="card-body">
                    <h2 class="d-inline-block">Welcome to IRPGToolbox!</h2>
                    <h5 class="text-muted">Your (hopefully) all-encompassing resource for Inflation RPG knowledge.</h5>

                    <div class="row mt-5">
                        <div class="col-3">
                            <a href="#" class="text-decoration-none text-light">
                                <x-card :header="'Weapons'">
                                </x-card>
                            </a>
                        </div>

                        <div class="col-3">
                            <a href="#" class="text-decoration-none text-light">
                                <x-card :header="'Armors'">
                                </x-card>
                            </a>
                        </div>

                        <div class="col-3">
                            <a href="#" class="text-decoration-none text-light">
                                <x-card :header="'Accessories'">
                                </x-card>
                            </a>
                        </div>

                        <div class="col-3">
                            <a href="#" class="text-decoration-none text-light">
                                <x-card :header="'Maps'">
                                </x-card>
                            </a>
                        </div>

                        <div class="col-3">
                            <a href="#" class="text-decoration-none text-light">
                                <x-card :header="'Bosses'">
                                </x-card>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-sm-4 col-lg-2">
                            <x-card>
                                <ul class="m-0">
                                    <li> <a href="#" class="link-light">Weapons</a> </li>
                                    <li> <a href="#" class="link-light">Armors</a> </li>
                                    <li><a href="#" class="link-light">Accessories</a></li>
                                    <li><a href="#" class="link-light">Maps</a></li>
                                    <li><a href="#" class="link-light">Bosses</a></li>
                                    <li><a href="#" class="link-light">Character</a></li>
                                    <li><a href="#" class="link-light">Guides</a></li>
                                </ul>
                            </x-card>
                            <div class="row">
                            </div>
                            <div class="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
