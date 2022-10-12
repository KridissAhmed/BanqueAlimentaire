<?php

namespace ContainerYiZNdmQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4be19 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer57350 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4ca47 = [
        
    ];

    public function getConnection()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getConnection', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getMetadataFactory', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getExpressionBuilder', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'beginTransaction', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getCache', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getCache();
    }

    public function transactional($func)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'transactional', array('func' => $func), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'wrapInTransaction', array('func' => $func), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'commit', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->commit();
    }

    public function rollback()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'rollback', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getClassMetadata', array('className' => $className), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'createQuery', array('dql' => $dql), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'createNamedQuery', array('name' => $name), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'createQueryBuilder', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'flush', array('entity' => $entity), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'clear', array('entityName' => $entityName), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->clear($entityName);
    }

    public function close()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'close', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->close();
    }

    public function persist($entity)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'persist', array('entity' => $entity), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'remove', array('entity' => $entity), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'refresh', array('entity' => $entity), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'detach', array('entity' => $entity), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'merge', array('entity' => $entity), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getRepository', array('entityName' => $entityName), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'contains', array('entity' => $entity), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getEventManager', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getConfiguration', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'isOpen', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getUnitOfWork', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getProxyFactory', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'initializeObject', array('obj' => $obj), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'getFilters', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'isFiltersStateClean', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'hasFilters', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return $this->valueHolder4be19->hasFilters();
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

        $instance->initializer57350 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder4be19) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4be19 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4be19->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, '__get', ['name' => $name], $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        if (isset(self::$publicProperties4ca47[$name])) {
            return $this->valueHolder4be19->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4be19;

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

        $targetObject = $this->valueHolder4be19;
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
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4be19;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4be19;
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
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, '__isset', array('name' => $name), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4be19;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4be19;
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
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, '__unset', array('name' => $name), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4be19;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4be19;
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
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, '__clone', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        $this->valueHolder4be19 = clone $this->valueHolder4be19;
    }

    public function __sleep()
    {
        $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, '__sleep', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;

        return array('valueHolder4be19');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer57350 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer57350;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer57350 && ($this->initializer57350->__invoke($valueHolder4be19, $this, 'initializeProxy', array(), $this->initializer57350) || 1) && $this->valueHolder4be19 = $valueHolder4be19;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4be19;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4be19;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
