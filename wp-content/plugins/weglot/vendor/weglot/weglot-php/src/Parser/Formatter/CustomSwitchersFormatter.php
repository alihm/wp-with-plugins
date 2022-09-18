<?php

namespace Weglot\Parser\Formatter;

use WGSimpleHtmlDom\simple_html_dom;
use Weglot\Parser\Parser;

class CustomSwitchersFormatter {
    /**
     * @var simple_html_dom
     */
    protected $dom;

    /**
     * @var array
     */
    protected $customSwitchers;

    /**
     * CustomSwitchersFormatter constructor.
     *
     * @param $dom
     */
    public function __construct( $dom, $customSwitchers ) {
        $this
            ->setDom( $dom )
            ->setCustomSwitchers( $customSwitchers );
        $this->handle( $this->dom, $customSwitchers );
    }

    /**
     * @param simple_html_dom $dom
     *
     * @return $this
     */
    public function setDom( simple_html_dom $dom ) {
        $this->dom = $dom;

        return $this;
    }

    /**
     * @return simple_html_dom
     */
    public function getDom() {
        return $this->dom;
    }

    /**
     * @param array $customSwitchers
     *
     * @return $this
     */
    public function setCustomSwitchers( array $customSwitchers ) {
        $this->customSwitchers = $customSwitchers;

        return $this;
    }

    /**
     * @return array
     */
    public function getCustomSwitchers() {
        return $this->customSwitchers;
    }

    /**
     * <div class="target">target</div> foreach customswitchers
     * wanna be translated.
     *
     * @return simple_html_dom
     */
    public function handle( $dom, $switchers ) {
        foreach ( $switchers as $switcher ) {

            $location = $switcher['location'];
            if ( ! empty( $location ) ) {
                //we check if we find the target location
                if ( $dom->find( $location['target'] ) && is_array( $dom->find( $location['target'] ) ) ) {
                    foreach ( $dom->find( $location['target'] ) as $target ) {
                        //for each target we check if we have an associate sibling or we put the switcher into him
                        if ( empty( $location['sibling'] ) ) {
                            $target->innertext .= '<div data-wg-position="' . $location['target'] . '"></div>';
                        } else {
                            // we try to find the sibling
                            if ( $dom->find( $location['target'] . ' ' . $location['sibling'] ) ) {
                                // we check if the sibling is a parent of the target location and we put the switche before
                                foreach ( $dom->find( $location['target'] . ' ' . $location['sibling'] ) as $sibling ) {
                                    if ( is_object( $sibling ) ) {
                                        $sibling->outertext = '<div data-wg-position="' . $location['target'] . ' ' . $location['sibling'] . '"></div>' . $sibling->outertext;
                                    }
                                }
                            } else {
                                foreach ( $dom->find( $location['sibling'], 0 ) as $sibling ) {
                                    if ( is_object( $sibling ) ) {
                                        $sibling->outertext = '<div data-wg-position="' . $location['target'] . ' ' . $location['sibling'] . '"></div>' . $sibling->outertext;
                                    }
                                }
                            }
                        }
                    }
                } else {
                    if ( $dom->find( 'body' ) && is_array( $dom->find( 'body' ) ) ) {
                        foreach ( $dom->find( 'body' ) as $body ) {
                            $body->outertext = $body->innertext . '<div data-wg-position="' . $location['target'] . ' ' . $location['sibling'] . '" data-wg-ajax="true"></div></body>';
                        }
                    }
                }
            }
        }

        return $dom;
    }
}
