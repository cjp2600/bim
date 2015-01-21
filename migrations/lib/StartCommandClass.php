<?php
/**
 * Created for the project "bim"
 *
 * @author: Stanislav Semenov (CJP2600)
 * @email: cjp2600@ya.ru
 *
 * @date: 21.01.2015
 * @time: 22:42
 */

class StartCommandClass extends Command {

    public function execute(array $args, array $options = array())
    {
        $this->writeln('Привет это я',Colors::GREEN);
    }

}