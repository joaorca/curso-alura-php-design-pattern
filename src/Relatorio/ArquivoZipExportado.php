<?php

namespace Alura\DesignPattern\Relatorio;

class ArquivoZipExportado implements ArquivoExportado
{
    private string $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno)
    {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $caminhoArquivo = tempnam(dirname(__DIR__) . '/../', 'zip');
        $arquivoZip = new \ZipArchive();
        $arquivoZip->open($caminhoArquivo);
        $arquivoZip->addFromString(
            $this->nomeArquivoInterno,
            serialize($conteudoExportado->conteudo())
        );
        $arquivoZip->close();

        return $caminhoArquivo;
    }
}
