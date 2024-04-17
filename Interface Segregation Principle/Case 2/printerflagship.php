<?php

class PrinterFlagship implements FiturCetak, FiturScan {
    private FiturFax $fiturFax;

    public function __construct(FiturFax $fiturFax) {
        $this->fiturFax = $fiturFax;
    }

    public function terimaFax(): void {
        $this->fiturFax->terimaFax();
    }

    public function cetakKertas(): void {
        echo "Printing in Printer Flagship\n";
    }

    public function scanKertas(): void {
        echo "Scanning in Printer Flagship\n";
    }
}

?>
