<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \App\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'codeArticle', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'libelleArticle', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'indice', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'sousFamille', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'detailCommandes', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'classification', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'publiable'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'codeArticle', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'libelleArticle', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'indice', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'sousFamille', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'detailCommandes', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'classification', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'publiable'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeArticle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeArticle', []);

        return parent::getCodeArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeArticle(string $codeArticle): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeArticle', [$codeArticle]);

        return parent::setCodeArticle($codeArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelleArticle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelleArticle', []);

        return parent::getLibelleArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelleArticle(string $libelleArticle): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelleArticle', [$libelleArticle]);

        return parent::setLibelleArticle($libelleArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndice(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndice', []);

        return parent::getIndice();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndice(int $indice): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIndice', [$indice]);

        return parent::setIndice($indice);
    }

    /**
     * {@inheritDoc}
     */
    public function getSousFamille(): ?\App\Entity\SousFamille
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSousFamille', []);

        return parent::getSousFamille();
    }

    /**
     * {@inheritDoc}
     */
    public function setSousFamille(?\App\Entity\SousFamille $sousFamille): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSousFamille', [$sousFamille]);

        return parent::setSousFamille($sousFamille);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetailCommandes(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetailCommandes', []);

        return parent::getDetailCommandes();
    }

    /**
     * {@inheritDoc}
     */
    public function addDetailCommande(\App\Entity\DetailCommande $detailCommande): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDetailCommande', [$detailCommande]);

        return parent::addDetailCommande($detailCommande);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDetailCommande(\App\Entity\DetailCommande $detailCommande): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDetailCommande', [$detailCommande]);

        return parent::removeDetailCommande($detailCommande);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassification(): ?\App\Entity\Classification
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassification', []);

        return parent::getClassification();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassification(?\App\Entity\Classification $classification): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassification', [$classification]);

        return parent::setClassification($classification);
    }

    /**
     * {@inheritDoc}
     */
    public function isPubliable(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPubliable', []);

        return parent::isPubliable();
    }

    /**
     * {@inheritDoc}
     */
    public function setPubliable(?bool $publiable): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPubliable', [$publiable]);

        return parent::setPubliable($publiable);
    }

}
