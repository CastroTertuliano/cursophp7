<?php //funão recursiva

$hierarquia = array(

    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio diretor comercial
                array(
                    'nome_cargo'=>'Diretor Comercial',
                    'subordinados'=>array(
                            //inicio gerente de vendas
                        array(
                            'nome_cargo'=>'Gerente de Vendas'
                        )
                        //termino gerente de vendas
                    )
                ),
                //termino diretor comercial

                //inicio diretor financeiro

            array(
                'nome_cargo'=>'Diretor financeiro',
                'subordinados'=>array(
                                        //gerente de contas a pagar
                                        array(
                                        'nome_cargo'=>'Gerente de contas a pagar',
                                        'subordinados'=>array(
                                            //inicio supervisor
                                         array(
                                         'nome_cargo'=>'suprvisor de pagamento'
                                         )

                                        //termino supervisor
                                        )
                                        )
                            //termino gerente de comtas a pagar

                            //inicio gernete de comprar
                    ,array(
                        'nome_cargo'=>'Geerente de compras',
                        'subordinados' => array(
                        //inicio supervisor de suplementos
                        array(
                            'nome_cargo'=>'supervisor de suplementos'
                        )

                    )

                )
                //termino gerente de compras
                )
                )
            )
        //termino diretor financeiro
    )
);

function exibe($cargos){

    $html = '<ul>';

        foreach ($cargos as $cargo){

            $html .= "<li>";

            $html .= $cargo ['nome_cargo'];

                if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

                    $html .= exibe($cargo['subordinados']);

                }

            $html .= "</li>";

        }

    $html .="</ul>";

    return $html;

}

echo exibe($hierarquia);

?>