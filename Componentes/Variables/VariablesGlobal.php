<?php


$nav = [
    "Inicio",
    "Sobre Nosotros",
    "Proyectos",
    "Contactanos"
];

$json = '[
    {
        "name": "Rick Sanchez",
        "status": "Alive",
        "species": "Human",
        "type": "",
        "gender": "Male",
        "origin": {
        "name": "Earth (C-137)",
        "url": "https://rickandmortyapi.com/api/location/1"
        },
        "location": {
        "name": "Citadel of Ricks",
        "url": "https://rickandmortyapi.com/api/location/3"
        },
        "image": "https://rickandmortyapi.com/api/character/avatar/1.jpeg",
        "url": "https://rickandmortyapi.com/api/character/1",
        "created": "2017-11-04T18:48:46.250Z"
        },
        {
            "id": 2,
            "name": "Morty Smith",
            "status": "Alive",
            "species": "Human",
            "type": "",
            "gender": "Male",
            "origin": {
            "name": "unknown",
            "url": ""
            },
            "location": {
            "name": "Citadel of Ricks",
            "url": "https://rickandmortyapi.com/api/location/3"
            },
            "image": "https://rickandmortyapi.com/api/character/avatar/2.jpeg",
            "url": "https://rickandmortyapi.com/api/character/2",
            "created": "2017-11-04T18:50:21.651Z"
            },
            {
                "id": 3,
                "name": "Summer Smith",
                "status": "Unknown",
                "species": "Human",
                "type": "",
                "gender": "Female",
                "origin": {
                "name": "Earth (Replacement Dimension)",
                "url": "https://rickandmortyapi.com/api/location/20"
                },
                "location": {
                "name": "Earth (Replacement Dimension)",
                "url": "https://rickandmortyapi.com/api/location/20"
                },
                "image": "https://rickandmortyapi.com/api/character/avatar/3.jpeg",
                "url": "https://rickandmortyapi.com/api/character/3",
                "created": "2017-11-04T19:09:56.428Z"
                },
                {
                    "id": 4,
                    "name": "Beth Smith",
                    "status": "Dead",
                    "species": "Human",
                    "type": "",
                    "gender": "Female",
                    "origin": {
                    "name": "Earth (Replacement Dimension)",
                    "url": "https://rickandmortyapi.com/api/location/20"
                    },
                    "location": {
                    "name": "Earth (Replacement Dimension)",
                    "url": "https://rickandmortyapi.com/api/location/20"
                    },
                    "image": "https://rickandmortyapi.com/api/character/avatar/4.jpeg",
                    "url": "https://rickandmortyapi.com/api/character/4",
                    "created": "2017-11-04T19:22:43.665Z"
                },
                {
                    "id": 5,
                    "name": "Jerry Smith",
                    "status": "Alive",
                    "species": "Human",
                    "type": "",
                    "gender": "Male",
                    "origin": {
                    "name": "Earth (Replacement Dimension)",
                    "url": "https://rickandmortyapi.com/api/location/20"
                    },
                    "location": {
                    "name": "Earth (Replacement Dimension)",
                    "url": "https://rickandmortyapi.com/api/location/20"
                    },
                    "image": "https://rickandmortyapi.com/api/character/avatar/5.jpeg",
                    "url": "https://rickandmortyapi.com/api/character/5",
                    "created": "2017-11-04T19:26:56.301Z"
                    },
                    {
                        "id": 6,
                        "name": "Abadango Cluster Princess",
                        "status": "Alive",
                        "species": "Alien",
                        "type": "",
                        "gender": "Female",
                        "origin": {
                        "name": "Abadango",
                        "url": "https://rickandmortyapi.com/api/location/2"
                        },
                        "location": {
                        "name": "Abadango",
                        "url": "https://rickandmortyapi.com/api/location/2"
                        },
                        "image": "https://rickandmortyapi.com/api/character/avatar/6.jpeg",
                        "episode": [
                        "https://rickandmortyapi.com/api/episode/27"
                        ],
                        "url": "https://rickandmortyapi.com/api/character/6",
                        "created": "2017-11-04T19:50:28.250Z"
                        }
]';

// Como objetos
$datos = json_decode($json);