<?php
namespace samson\core;

/**
 * Interface for external SamsonPHP module
 *
 * @package SamsonPHP
 * @author Vitaly Iegorov <vitalyiegorov@gmail.com>
 * @version 0.1
 */
interface iExternalModule extends iModule
{
    /**
     * Специальный обработчик для выполнения процесса проверки и подготовки
     * подключаемого в ядро системы модуля.
     * @return boolean
     */
    public function prepare();

    /**
     * Специальный обработчик для финальной инициализации подключаемого в ядро системы модуля.
     * Этот метод должен установить специфические параметры для модуля, выполнить создание всех
     * необходимых классов модуля и их инициализацию.
     *
     * @param array $params Необязательная коллекция параметров для инициализации модуля
     * @return boolean
     */
    public function init(array $params = array());

    /**
     * Create module copy
     * @return iExternalModule Copied module instance
     */
    public function &copy();
}
