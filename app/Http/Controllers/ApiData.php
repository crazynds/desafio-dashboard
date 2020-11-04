<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiData extends Controller{

    public function getData(){
        return [
            "success" => true,
            "quadras"=> [
                [
                    "id" => 92,
                    "nome" => "Quadra 1",
                    "piso" => "Madeira",
                    "hasCobertura" => 0,
                    "comprimento" => 22,
                    "largura" => 15,
                    "total_horas_disponiveis" => 16
                ]
            ],
            "reservas" => [
                [
                    "id" => 17424,
                    "start" => "2020-10-24 17:00",
                    "end" => "2020-10-24 18:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17425,
                    "start" => "2020-10-24 18:00",
                    "end" => "2020-10-24 19:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 140,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17426,
                    "start" => "2020-10-24 19:00",
                    "end" => "2020-10-24 20:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17427,
                    "start" => "2020-10-24 19:30",
                    "end" => "2020-10-24 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 90,
                    "valor_pago" => 90,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17428,
                    "start" => "2020-10-24 21:00",
                    "end" => "2020-10-24 22:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 120,
                    "valor_pago" => 120,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17426,
                    "start" => "2020-10-25 19:00",
                    "end" => "2020-10-25 20:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17427,
                    "start" => "2020-10-25 19:30",
                    "end" => "2020-10-25 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 90,
                    "valor_pago" => 90,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17420,
                    "start" => "2020-10-26 12:30",
                    "end" => "2020-10-26 14:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 1,
                    "preco" => 100,
                    "valor_pago" => 95,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17421,
                    "start" => "2020-10-26 15:30",
                    "end" => "2020-10-26 16:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 1,
                    "preco" => 100,
                    "valor_pago" => 100,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17422,
                    "start" => "2020-10-26 18:30",
                    "end" => "2020-10-26 19:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17423,
                    "start" => "2020-10-26 19:30",
                    "end" => "2020-10-26 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17424,
                    "start" => "2020-10-26 17:00",
                    "end" => "2020-10-26 18:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17425,
                    "start" => "2020-10-26 18:00",
                    "end" => "2020-10-26 19:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 140,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17426,
                    "start" => "2020-10-26 19:00",
                    "end" => "2020-10-26 20:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17427,
                    "start" => "2020-10-26 19:30",
                    "end" => "2020-10-26 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 90,
                    "valor_pago" => 90,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17428,
                    "start" => "2020-10-26 21:00",
                    "end" => "2020-10-26 22:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 120,
                    "valor_pago" => 120,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17420,
                    "start" => "2020-10-27 12:30",
                    "end" => "2020-10-27 14:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 1,
                    "preco" => 100,
                    "valor_pago" => 95,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17421,
                    "start" => "2020-10-27 15:30",
                    "end" => "2020-10-27 16:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 1,
                    "preco" => 100,
                    "valor_pago" => 100,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17422,
                    "start" => "2020-10-27 18:30",
                    "end" => "2020-10-27 19:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17423,
                    "start" => "2020-10-27 19:30",
                    "end" => "2020-10-27 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17424,
                    "start" => "2020-10-27 17:00",
                    "end" => "2020-10-27 18:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17425,
                    "start" => "2020-10-27 18:00",
                    "end" => "2020-10-27 19:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 140,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17422,
                    "start" => "2020-10-28 18:30",
                    "end" => "2020-10-28 19:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17423,
                    "start" => "2020-10-28 19:30",
                    "end" => "2020-10-28 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17424,
                    "start" => "2020-10-28 17:00",
                    "end" => "2020-10-28 18:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17425,
                    "start" => "2020-10-28 18:00",
                    "end" => "2020-10-28 19:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 140,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17426,
                    "start" => "2020-10-28 19:00",
                    "end" => "2020-10-28 20:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17427,
                    "start" => "2020-10-28 19:30",
                    "end" => "2020-10-28 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 90,
                    "valor_pago" => 90,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17428,
                    "start" => "2020-10-28 21:00",
                    "end" => "2020-10-28 22:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 120,
                    "valor_pago" => 120,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17420,
                    "start" => "2020-10-29 12:30",
                    "end" => "2020-10-29 14:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 1,
                    "preco" => 100,
                    "valor_pago" => 95,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17421,
                    "start" => "2020-10-29 15:30",
                    "end" => "2020-10-29 16:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 1,
                    "preco" => 100,
                    "valor_pago" => 100,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17426,
                    "start" => "2020-10-29 19:00",
                    "end" => "2020-10-29 20:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17427,
                    "start" => "2020-10-29 19:30",
                    "end" => "2020-10-29 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 90,
                    "valor_pago" => 90,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17428,
                    "start" => "2020-10-29 21:00",
                    "end" => "2020-10-29 22:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 120,
                    "valor_pago" => 120,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17420,
                    "start" => "2020-10-30 12:30",
                    "end" => "2020-10-30 14:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 1,
                    "preco" => 100,
                    "valor_pago" => 95,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17421,
                    "start" => "2020-10-30 15:30",
                    "end" => "2020-10-30 16:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 1,
                    "preco" => 100,
                    "valor_pago" => 100,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17422,
                    "start" => "2020-10-30 18:30",
                    "end" => "2020-10-30 19:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17423,
                    "start" => "2020-10-30 19:30",
                    "end" => "2020-10-30 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17424,
                    "start" => "2020-10-30 17:00",
                    "end" => "2020-10-30 18:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17425,
                    "start" => "2020-10-30 18:00",
                    "end" => "2020-10-30 19:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "fixo",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 140,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17426,
                    "start" => "2020-10-30 19:00",
                    "end" => "2020-10-30 20:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 4,
                    "preco" => 150,
                    "valor_pago" => 150,
                    "tipo_pagamento" => "dinheiro"
                ],
                [
                    "id" => 17427,
                    "start" => "2020-10-30 19:30",
                    "end" => "2020-10-30 21:00",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "cel",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 90,
                    "valor_pago" => 90,
                    "tipo_pagamento" => "cartao_visa"
                ],
                [
                    "id" => 17428,
                    "start" => "2020-10-30 21:00",
                    "end" => "2020-10-30 22:30",
                    "nome" => "João",
                    "cpf" => null,
                    "telefone" => null,
                    "tipo" => "avulso",
                    "tipo_marcacao" => "web",
                    "quadra_id" => 92,
                    "esporte_id" => 9,
                    "preco" => 120,
                    "valor_pago" => 120,
                    "tipo_pagamento" => "dinheiro"
                ]
            ]
        ];
    }
}