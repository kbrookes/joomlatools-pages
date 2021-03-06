<?php
/**
 * Joomlatools Pages
 *
 * @copyright   Copyright (C) 2018 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/joomlatools/joomlatools-pages for the canonical source repository
 */

class ComPagesViewCsv extends KViewCsv
{
    use ComPagesViewTraitModellable, ComPagesViewTraitLocatable;

    protected function _fetchData(KViewContext $context)
    {
        parent::_fetchData($context);

        if($this->isCollection()) {
            $context->parameters->total = $this->getModel()->count();
        }
    }
}