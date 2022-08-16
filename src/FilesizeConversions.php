<?php

namespace XndBogdan\FilesizeConversions;

class FilesizeConversions
{
    protected float $bytes;

    private static function folderSize($dir, $level = 0)
    {
        // We do not want this to recurse forever, so we'll set a limit
        if ($level > 5) {
            return 0;
        }

        $size = 0;

        foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
            $size += is_file($each) ? filesize($each) : self::folderSize($each);
        }

        return $size;
    }

    public function __construct(float $bytes)
    {
        $this->bytes = $bytes;
    }

    public static function fromFile(string $path): self
    {
        return new self(filesize($path));
    }

    public static function fromFolder(string $path): self
    {
        return new self(self::folderSize($path));
    }

    public static function fromBytes(float $bytes): self
    {
        return new self($bytes);
    }

    public static function fromKilobytes(float $kilobytes): self
    {
        return new self($kilobytes * 1024);
    }

    public static function fromMegabytes(float $megabytes): self
    {
        return new self($megabytes * pow(1024, 2));
    }

    public static function fromGigabytes(float $gigabytes): self
    {
        return new self($gigabytes * pow(1024, 3));
    }

    public static function fromTerabytes(float $terabytes): self
    {
        return new self($terabytes * pow(1024, 4));
    }

    public static function fromPetabytes(float $petabytes): self
    {
        return new self($petabytes * pow(1024, 5));
    }

    public static function fromExabytes(float $exabytes): self
    {
        return new self($exabytes * pow(1024, 6));
    }

    public static function fromZettabytes(float $zettabytes): self
    {
        return new self($zettabytes * pow(1024, 7));
    }

    public static function fromYottabytes(float $yottabytes): self
    {
        return new self($yottabytes * pow(1024, 8));
    }

    public static function fromBits(float $bits): self
    {
        return new self($bits / 8);
    }

    public static function fromKilobits(float $kilobits): self
    {
        return new self($kilobits / 8 * 1024);
    }

    public static function fromMegabits(float $megabits): self
    {
        return new self($megabits / 8 * pow(1024, 2));
    }

    public static function fromGigabits(float $gigabits): self
    {
        return new self($gigabits / 8 * pow(1024, 3));
    }

    public static function fromTerabits(float $terabits): self
    {
        return new self($terabits / 8 * pow(1024, 4));
    }

    public static function fromPetabits(float $petabits): self
    {
        return new self($petabits / 8 * pow(1024, 5));
    }

    public static function fromExabits(float $exabits): self
    {
        return new self($exabits / 8 * pow(1024, 6));
    }

    public static function fromZettabits(float $zettabits): self
    {
        return new self($zettabits / 8 * pow(1024, 7));
    }

    public static function fromYottabits(float $yottabits): self
    {
        return new self($yottabits / 8 * pow(1024, 8));
    }

    public function toBytes(): float
    {
        return round($this->bytes, 2);
    }

    public function toKilobytes(): float
    {
        return round($this->bytes / 1024, 2);
    }

    public function toMegabytes(): float
    {
        return round($this->bytes / pow(1024, 2), 2);
    }

    public function toGigabytes(): float
    {
        return round($this->bytes / pow(1024, 3), 2);
    }

    public function toTerabytes(): float
    {
        return round($this->bytes / pow(1024, 4), 2);
    }

    public function toPetabytes(): float
    {
        return round($this->bytes / pow(1024, 5), 2);
    }

    public function toExabytes(): float
    {
        return round($this->bytes / pow(1024, 6), 2);
    }

    public function toZettabytes(): float
    {
        return round($this->bytes / pow(1024, 7), 2);
    }

    public function toYottabytes(): float
    {
        return round($this->bytes / pow(1024, 8), 2);
    }

    public function toBits(): float
    {
        return round($this->bytes * 8, 2);
    }

    public function toKilobits(): float
    {
        return round($this->bytes * 8 / 1024, 2);
    }

    public function toMegabits(): float
    {
        return round($this->bytes * 8 / pow(1024, 2), 2);
    }

    public function toGigabits(): float
    {
        return round($this->bytes * 8 / pow(1024, 3), 2);
    }

    public function toTerabits(): float
    {
        return round($this->bytes * 8 / pow(1024, 4), 2);
    }

    public function toPetabits(): float
    {
        return round($this->bytes * 8 / pow(1024, 5), 2);
    }

    public function toExabits(): float
    {
        return round($this->bytes * 8 / pow(1024, 6), 2);
    }

    public function toZettabits(): float
    {
        return round($this->bytes * 8 / pow(1024, 7), 2);
    }

    public function toYottabits(): float
    {
        return round($this->bytes * 8 / pow(1024, 8), 2);
    }

    public function toBytesHuman(): string
    {
        return $this->toBytes().' bytes';
    }

    public function toKilobytesHuman(): string
    {
        return $this->toKilobytes().' KB';
    }

    public function toMegabytesHuman(): string
    {
        return $this->toMegabytes().' MB';
    }

    public function toGigabytesHuman(): string
    {
        return $this->toGigabytes().' GB';
    }

    public function toTerabytesHuman(): string
    {
        return $this->toTerabytes().' TB';
    }

    public function toPetabytesHuman(): string
    {
        return $this->toPetabytes().' PB';
    }

    public function toExabytesHuman(): string
    {
        return $this->toExabytes().' EB';
    }

    public function toZettabytesHuman(): string
    {
        return $this->toZettabytes().' ZB';
    }

    public function toYottabytesHuman(): string
    {
        return $this->toYottabytes().' YB';
    }

    public function toBitsHuman(): string
    {
        return $this->toBits().' bits';
    }

    public function toKilobitsHuman(): string
    {
        return $this->toKilobits().' Kbits';
    }

    public function toMegabitsHuman(): string
    {
        return $this->toMegabits().' Mbits';
    }

    public function toGigabitsHuman(): string
    {
        return $this->toGigabits().' Gbits';
    }

    public function toTerabitsHuman(): string
    {
        return $this->toTerabits().' Tbits';
    }

    public function toPetabitsHuman(): string
    {
        return $this->toPetabits().' Pbits';
    }

    public function toExabitsHuman(): string
    {
        return $this->toExabits().' Ebits';
    }

    public function toZettabitsHuman(): string
    {
        return $this->toZettabits().' Zbits';
    }

    public function toYottabitsHuman(): string
    {
        return $this->toYottabits().' Ybits';
    }

    public function __toString(): string
    {
        return $this->toBytes().' bytes';
    }
}
