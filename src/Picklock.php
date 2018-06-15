<?php
declare(strict_types=1);

namespace m0rtis\Picklock;

final class Picklock
{
    /**
     * @param object $object
     * @param string $methodName
     * @param mixed ...$args
     * @return mixed
     */
    public static function callMethod(object $object, string $methodName, ...$args)
    {
        $closure = function (string $methodName, ...$args) {
            if (\method_exists($this, $methodName)) {
                return $this->$methodName(...$args);
            }
            throw new \RuntimeException(
                sprintf(
                    'Class %s does not have the method %s',
                    \get_class($this),
                    $methodName
                )
            );
        };
        return $closure->call($object, $methodName, ...$args);
    }
}