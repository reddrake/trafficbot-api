<?php
namespace Trafficbot\Operations;

class ModifyProject extends AbstractOperation
{
    public function getName()
    {
        return 'modifyproject';
    }

    public function setTitle($title)
    {
        $this->parameter['title'] = $title;
        return $this;
    }

    public function setUrls($urls)
    {
        $this->parameter['urls'] = $urls;
        return $this;
    }

    public function setSecondUrls($second_urls)
    {
        $this->parameter['second_urls'] = $second_urls;
        return $this;
    }

    public function setThirdUrls($third_urls)
    {
        $this->parameter['third_urls'] = $third_urls;
        return $this;
    }

    public function setReferrers($referrers)
    {
        $this->parameter['referrers'] = $referrers;
        return $this;
    }

    public function setLanguages($languages)
    {
        $this->parameter['languages'] = $languages;
        return $this;
    }

    public function setBounceRate($bounce_rate)
    {
        $this->parameter['bounce_rate'] = $bounce_rate;
        return $this;
    }

    public function setTimeOnPage($time_on_page)
    {
        $this->parameter['time_on_page'] = $time_on_page;
        return $this;
    }

    public function setBehaviour($behaviour)
    {
        $this->parameter['behaviour'] = $behaviour;
        return $this;
    }

    public function setTrafficSource($traffic_source)
    {
        $this->parameter['traffic_source'] = $traffic_source;
        return $this;
    }

    public function setThreadsCount($threads_count)
    {
        $this->parameter['threads_count'] = $threads_count;
        return $this;
    }
}