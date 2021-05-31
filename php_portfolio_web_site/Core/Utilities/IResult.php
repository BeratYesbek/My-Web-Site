<?php
interface IResult {
    function Success() : bool;
    function Message() : string;
}