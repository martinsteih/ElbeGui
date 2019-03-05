<?php

class InitVm implements JsonSerializable {
	private $buildType;
	private $mirror;
	private $noauth;
	private $preference;
	private $suite;
	private $packageList;
	private $preseed;
	private $size;
	private $imageType;
	private $portForwarding;

	public
	function __construct( string $buildType, string $mirror, bool $noauth, string $preferences, string $suite, array $packageList, string $preseed, string $size, string $imageType, int $portForwarding ) {
		$this->buildType = $buildType;
		$this->mirror = $mirror;
		$this->noauth = $noauth;
		$this->preference = $preferences;
		$this->suite = $suite;
		$this->packageList = $packageList;
		$this->preseed = $preseed;
		$this->size = $size;
		$this->imageType = $imageType;
		$this->portForwarding = $portForwarding;
	}

	public
	function jsonSerialize() {
		return get_object_vars( $this );
	}

	public
	function getBuildType(): string {
		return $this->buildType;
	}

	public
	function setBuildType( string $buildType ): void {
		$this->buildType = $buildType;
	}

	public
	function getMirror(): string {
		return $this->mirror;
	}

	public
	function setMirror( string $mirror ): void {
		$this->mirror = $mirror;
	}

	public
	function getNoauth(): bool {
		return $this->noauth;
	}

	public
	function setNoauth( bool $noauth ): void {
		$this->noauth = $noauth;
	}

	public
	function getPreferences(): string {
		return $this->preference;
	}

	public
	function setPreferences( string $preferences ): void {
		$this->preference = $preference;
	}

	public
	function getSuite(): string {
		return $this->suite;
	}

	public
	function setSuite( string $suite ): void {
		$this->suite = $suite;
	}

	public
	function getPackageList(): array {
		return $this->packageList;
	}

	public
	function setPackageList( array $packageList ): void {
		$this->packageList = $packageList;
	}


}

?>