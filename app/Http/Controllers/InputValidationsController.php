<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputValidationsController extends Controller
{
    public static function validationsLogin(Request $request)
    {
        $request->validate(
            [
                'usuario' => [
                    'required',
                ],
                'senha' => [
                    'required',
                ]
            ],
            [
                'usuario.required' => 'Informe o usuário.',
                'senha.required' => 'Informe a senha.'
            ]
        );
    }

    public static function validationUser(Request $request)
    {
        $request->validate(
            [
                'nome_usuario' => [
                    'required',
                ],
                'usuario' => [
                    'required',
                ],
                'site_usuario' => [
                    'required',
                ],
                'perfil' => [
                    'required',
                ],
                'senha' => [
                    'required',
                    'min: 12',
                    'regex: /[0-9]/',
                    'regex: /[A-Z]/',
                ]
            ],
            [
                'nome_usuario.required' => 'O nome do usuário deve ser preenchido.',

                'usuario.required' => 'O usuário de acesso deve ser preenchido.',

                'site_usuario.required' => 'O site do usuário deve ser preenchido.',

                'senha.required' => 'A senha deve ser preenchida.',
                'senha.min' => 'A senha deve possuir no mínimo :min caracteres.',
                'senha.regex' => 'A senha deve possuir pelo menos um número e uma letra maiúscula.'
            ]
        );
    }

    public static function validationSite(Request $request)
    {
        $request->validate(
            [
                'site' => [
                    'required'
                ],
                'titulo_url01' => [
                    'required'
                ],
                'url01' => [
                    'required',
                    'url'
                ]
            ],
            [
                'site.required' => 'O nome do site deve ser informado.',

                'titulo_url01.required' => 'Deve ser cadastrado pelo menos uma ferramenta.',
                'url01.required' => 'Deve ser cadastrado pelo menos uma ferramenta.',
                'url01.url' => 'A URL informada não é uma URL válida.'
            ]
        );
    }
}
