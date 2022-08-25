<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * this file will create the block instance
 *
 * @package    block_blockgenerator
 * @copyright  2022 munem
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_blockgenerator extends block_base
{
    public function init()
    {
        $this->title = 'block_blockgenerator';
    }

    /**
     * Add content for the block
     */
    public function get_content()
    {
        if ($this->content !== null) {
            return $this->content;
        }
        $this->content = new stdClass();
        $this->content->text   = 'The content of our template block!';
        $this->content->footer = 'Footer here...';

        return $this->content;
    }

    /**
     * Allow the block to have a multiple instance.
     *
     * @return bool
     */
    public function instance_allow_multiple()
    {
        return true;
    }
}
