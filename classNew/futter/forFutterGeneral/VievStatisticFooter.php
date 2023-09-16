<?php
namespace class\classNew\futter\forFutterGeneral;

class VievStatisticFooter
{
    use \class\redaktor\interface\trait\toStatistic\TraitLabelStatistika;
    use \class\redaktor\interface\trait\toStatistic\TraitGetLabelStatistika;
    use \class\redaktor\interface\trait\toStatistic\TraitGetRequestCount;
    use \class\redaktor\interface\trait\toScolding\TraitUserAddMat;
    use \class\redaktor\interface\trait\toScolding\TraitIsUserBlocked;
    use \class\redaktor\interface\trait\toBD\TraitZaprosSQL;
    use \class\redaktor\interface\trait\toType\TraitNotFalseAndNULL;

    public function __construct(string $metka)
    {
        // Вывод статистики Футтер
        $this->metkaStatistika($metka);
        echo '<div class="futterDivDfdx">';
        echo '<p class="footerMarginTop">Просмотров:'.$this->getMetkaStatistik($metka).'</p>'; //TraitInterfaceWorkToStatistik
        echo '<p class="footerMarginTop">Число запросов к БД: '.$this->kolZaprosow().'</p>';   //TraitInterfaceWorkToStatistik
        echo '<p class="footerMarginTop">Начало верстки сайта 2021-09-19</p>';
        echo '<p class="footerMarginTop">CMS-DFDX</p>';
        echo '</div>';
        $this->dobavilMat('Здесь можно пополнить справочник нецензурных слов. Слово попадет в базу после проверки модератором.');
        echo '</footer>';
    }
}
