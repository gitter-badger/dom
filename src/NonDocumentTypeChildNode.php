<?php
namespace phpgt\dom;

/**
 * Contains methods that are particular to Node objects that can have a parent,
 * but not suitable for DocumentType.
 *
 * This trait can only be used in a class that is a trait of LiveProperty.
 *
 * This trait is used by the following classes:
 *  - Element
 *  - CharacterData
 *
 * @property-read Element|null $previousElementSibling The Element immediately
 *  prior to this Node in its parent's $children list, or null if there is no
 *  Element in the list prior to this Node.
 * @property-read Element|null $nextElementSibling The Element immediately
 *  following this Node in its parent's children list, or null if there is no
 *  Element in the list following this node.
 */
trait NonDocumentTypeChildNode {

private function prop_previousElementSibling() {

}

private function prop_nextElementSibling() {

}

}#