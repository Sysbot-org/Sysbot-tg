<?php


namespace Sysbot\Telegram\ExtendedTypes;


use Sysbot\Telegram\Exceptions\InvalidArgumentException;
use Sysbot\Telegram\Types\InlineKeyboardButton;


/**
 * Trait InlineKeyboardMarkup
 * @package Sysbot\Telegram\ExtendedTypes
 */
trait InlineKeyboardMarkup
{

    /**
     * @param int $row
     * @param InlineKeyboardButton $button
     * @param bool $first
     * @return $this
     */
    public function addButton(int $row, InlineKeyboardButton $button, bool $first = false): static
    {
        if (empty($this->inlineKeyboard[$row])) {
            throw new InvalidArgumentException('Row not found');
        }
        if ($first) {
            array_unshift($this->inlineKeyboard[$row], $button);
            return $this;
        }
        array_push($this->inlineKeyboard[$row], $button);
        return $this;
    }

    /**
     * @param int $row
     * @param int $index
     * @return $this
     */
    public function removeButton(int $row, int $index): static
    {
        if (empty($this->inlineKeyboard[$row][$index] ?? null)) {
            return $this;
        }
        unset($this->inlineKeyboard[$row][$index]);
        $this->inlineKeyboard[$row] = array_values($this->inlineKeyboard[$row]);
        return $this;
    }

    /**
     * @param InlineKeyboardButton[] $buttons
     * @param bool $first
     * @return $this
     */
    public function addRow(array $buttons, bool $first = false): static
    {
        if ($first) {
            array_unshift($this->inlineKeyboard, $buttons);
            return $this;
        }
        array_push($this->inlineKeyboard, $buttons);
        return $this;
    }

    /**
     * @param int $index
     * @return $this
     */
    public function removeRow(int $index): static
    {
        if (empty($this->inlineKeyboard[$index])) {
            return $this;
        }
        unset($this->inlineKeyboard[$index]);
        return $this;
    }

}