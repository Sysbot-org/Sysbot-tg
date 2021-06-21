<?php


namespace Sysbot\Telegram\ExtendedTypes;


use Sysbot\Telegram\Exceptions\InvalidArgumentException;
use Sysbot\Telegram\Types\KeyboardButton;

trait ReplyKeyboardMarkup
{

    /**
     * @param int $row
     * @param KeyboardButton $button
     * @param bool $first
     * @return $this
     */
    public function addButton(int $row, KeyboardButton $button, bool $first = false): static
    {
        if (empty($this->keyboard[$row])) {
            throw new InvalidArgumentException('Row not found');
        }
        if ($first) {
            array_unshift($this->keyboard[$row], $button);
            return $this;
        }
        array_push($this->keyboard[$row], $button);
        return $this;
    }

    /**
     * @param int $row
     * @param int $index
     * @return $this
     */
    public function removeButton(int $row, int $index): static
    {
        if (empty($this->keyboard[$row][$index] ?? null)) {
            return $this;
        }
        unset($this->keyboard[$row][$index]);
        $this->keyboard[$row] = array_values($this->keyboard[$row]);
        return $this;
    }

    /**
     * @param KeyboardButton[] $buttons
     * @param bool $first
     * @return $this
     */
    public function addRow(array $buttons, bool $first = false): static
    {
        if ($first) {
            array_unshift($this->keyboard, $buttons);
            return $this;
        }
        array_push($this->keyboard, $buttons);
        return $this;
    }

    public function removeRow(int $index): static
    {
        if (empty($this->keyboard[$index])) {
            return $this;
        }
        unset($this->keyboard[$index]);
        return $this;
    }

}