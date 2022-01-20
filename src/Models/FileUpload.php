<?php

namespace PyrobyteWeb\FileUpload\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class FileUpload extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->item_id;
    }

    /**
     * @param int|null $item_id
     */
    public function setItemId(?int $item_id): void
    {
        $this->item_id = $item_id;
    }

    /**
     * @return int|null
     */
    public function getCreatedBy(): ?int
    {
        return $this->created_by;
    }

    /**
     * @param int|null $created_by
     */
    public function setCreatedBy(?int $created_by): void
    {
        $this->created_by = $created_by;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getSection(): ?string
    {
        return $this->section;
    }

    /**
     * @param string|null $section
     */
    public function setSection(?string $section): void
    {
        $this->section = $section;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int|null $size
     */
    public function setSize(?int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}
