<?php

namespace ContainerMF3g48X;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd7f55 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8a343 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0eb44 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getConnection', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getMetadataFactory', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getExpressionBuilder', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'beginTransaction', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getCache', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'transactional', array('func' => $func), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'commit', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->commit();
    }

    public function rollback()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'rollback', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getClassMetadata', array('className' => $className), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'createQuery', array('dql' => $dql), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'createNamedQuery', array('name' => $name), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'createQueryBuilder', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'flush', array('entity' => $entity), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'clear', array('entityName' => $entityName), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->clear($entityName);
    }

    public function close()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'close', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->close();
    }

    public function persist($entity)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'persist', array('entity' => $entity), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'remove', array('entity' => $entity), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'refresh', array('entity' => $entity), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'detach', array('entity' => $entity), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'merge', array('entity' => $entity), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'contains', array('entity' => $entity), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getEventManager', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getConfiguration', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'isOpen', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getUnitOfWork', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getProxyFactory', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'initializeObject', array('obj' => $obj), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'getFilters', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'isFiltersStateClean', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'hasFilters', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return $this->valueHolderd7f55->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer8a343 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd7f55) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd7f55 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd7f55->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, '__get', ['name' => $name], $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        if (isset(self::$publicProperties0eb44[$name])) {
            return $this->valueHolderd7f55->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7f55;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7f55;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7f55;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7f55;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, '__isset', array('name' => $name), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7f55;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd7f55;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, '__unset', array('name' => $name), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7f55;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd7f55;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, '__clone', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        $this->valueHolderd7f55 = clone $this->valueHolderd7f55;
    }

    public function __sleep()
    {
        $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, '__sleep', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;

        return array('valueHolderd7f55');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8a343 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8a343;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8a343 && ($this->initializer8a343->__invoke($valueHolderd7f55, $this, 'initializeProxy', array(), $this->initializer8a343) || 1) && $this->valueHolderd7f55 = $valueHolderd7f55;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd7f55;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd7f55;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
