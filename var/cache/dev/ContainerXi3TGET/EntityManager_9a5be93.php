<?php

namespace ContainerXi3TGET;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder32bbe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer90bb4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58754 = [
        
    ];

    public function getConnection()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getConnection', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getMetadataFactory', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getExpressionBuilder', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'beginTransaction', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getCache', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'transactional', array('func' => $func), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'wrapInTransaction', array('func' => $func), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'commit', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->commit();
    }

    public function rollback()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'rollback', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getClassMetadata', array('className' => $className), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'createQuery', array('dql' => $dql), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'createNamedQuery', array('name' => $name), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'createQueryBuilder', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'flush', array('entity' => $entity), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'clear', array('entityName' => $entityName), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->clear($entityName);
    }

    public function close()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'close', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->close();
    }

    public function persist($entity)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'persist', array('entity' => $entity), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'remove', array('entity' => $entity), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'refresh', array('entity' => $entity), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'detach', array('entity' => $entity), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'merge', array('entity' => $entity), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'contains', array('entity' => $entity), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getEventManager', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getConfiguration', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'isOpen', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getUnitOfWork', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getProxyFactory', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'initializeObject', array('obj' => $obj), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'getFilters', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'isFiltersStateClean', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'hasFilters', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return $this->valueHolder32bbe->hasFilters();
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

        $instance->initializer90bb4 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder32bbe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder32bbe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder32bbe->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, '__get', ['name' => $name], $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        if (isset(self::$publicProperties58754[$name])) {
            return $this->valueHolder32bbe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32bbe;

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

        $targetObject = $this->valueHolder32bbe;
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
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32bbe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder32bbe;
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
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, '__isset', array('name' => $name), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32bbe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder32bbe;
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
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, '__unset', array('name' => $name), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32bbe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder32bbe;
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
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, '__clone', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        $this->valueHolder32bbe = clone $this->valueHolder32bbe;
    }

    public function __sleep()
    {
        $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, '__sleep', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;

        return array('valueHolder32bbe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer90bb4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer90bb4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer90bb4 && ($this->initializer90bb4->__invoke($valueHolder32bbe, $this, 'initializeProxy', array(), $this->initializer90bb4) || 1) && $this->valueHolder32bbe = $valueHolder32bbe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder32bbe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder32bbe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
