<?php


class GenericEncoder
{
    public function encodeToFormat($data, string $format): string
    {
        if ($format === 'json') {
            $encoder = new JsonEncoder();
        } elseif ($format === 'xml') {
            $encoder = new XmlEncoder();
        } else {
            throw new InvalidArgumentException('Unknown format');
        }
        $data = $this->prepareData($data, $format);
        return $encoder->encode($data);
    }

    private function prepareData($data, string $format)
    {
        switch ($format) {
            case 'json':
                $data = $this->forceArray($data);
                $data = $this->fixKeys($data);
                // fall through
            case 'xml':
                $data = $this->fixAttributes($data);
                break;
            default:
                throw new InvalidArgumentException('Format not supported');
        }
        return $data;
    }
}