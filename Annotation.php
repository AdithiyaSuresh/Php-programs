<?php

/**
 * Programs to test the annotation
 */

// Composer autoloader - used for autoloading doctrine components
require_once '/home/bridgeit/Adithiya/Doctrine/vendor/autoload.php';
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

/**
 *The example class to demonstrate annotations
 */
class Foo
{
/**
* @MyAnnotation(myProperty="value")
*/
public $bar;
}
/**
* @Annotation
*/
final class MyAnnotation
{
    public $myProperty;
}

$reflectionClass = new ReflectionClass('Foo');
$property = $reflectionClass->getProperty('bar');

$reader = new AnnotationReader();

$myAnnotation = $reader->getPropertyAnnotations($property, 'bar');
var_dump($myAnnotation);
 
?>