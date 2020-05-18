<div>
    <div class="row d-flex justify-content-center">
        <div class="col-6 border">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    @foreach($locations = explode('/', $location) as $path)
                        <?php
                        $directories = array_slice($locations, 0, ($loop->index) + 1);
                        $oldLocation = implode('/', $directories);
                        ?>
                        <li class="breadcrumb-item">
                            <a href="#"
                               wire:click.prevent="listCurrentDirectoryContent('{{$oldLocation}}')">{{$path}}</a>
                        </li>
                    @endforeach
                </ol>
            </nav>

            <div class="row">
                <div class="col-12 style" id="style-7">
                    <ul class="list-group list-group-flush">
                        @foreach($contents as $file)
                            <li class="list-group-item">
                                @if($file->isFile())
                                    <svg height="18" viewBox="0 0 128 128" width="18" xmlns="http://www.w3.org/2000/svg"
                                         style="vertical-align: top;">
                                        <g>
                                            <path d="m97.532 16.586v94.828h-67.064v10.28h77.345v-105.108z"
                                                  fill="#3ea2e5"/>
                                            <path d="m40.947 6.306h56.585v105.108h-77.345v-84.348z" fill="#dfeef4"/>
                                            <path d="m40.947 27.066h-20.76l20.76-20.76z" fill="#3ea2e5"/>
                                            <g fill="#6d7a84">
                                                <path
                                                    d="m81.61 48.524h-45.5a1.75 1.75 0 0 1 0-3.5h45.5a1.75 1.75 0 1 1 0 3.5z"/>
                                                <path
                                                    d="m81.61 60.61h-45.5a1.75 1.75 0 1 1 0-3.5h45.5a1.75 1.75 0 0 1 0 3.5z"/>
                                                <path
                                                    d="m81.61 72.7h-45.5a1.75 1.75 0 0 1 0-3.5h45.5a1.75 1.75 0 0 1 0 3.5z"/>
                                                <path
                                                    d="m81.61 84.781h-45.5a1.75 1.75 0 0 1 0-3.5h45.5a1.75 1.75 0 1 1 0 3.5z"/>
                                                <path
                                                    d="m81.61 96.867h-45.5a1.75 1.75 0 1 1 0-3.5h45.5a1.75 1.75 0 0 1 0 3.5z"/>
                                                <path
                                                    d="m81.61 36.438h-45.5a1.75 1.75 0 1 1 0-3.5h45.5a1.75 1.75 0 0 1 0 3.5z"/>
                                                <path d="m81.61 20.853h-40.663v3.5h40.663a1.75 1.75 0 0 0 0-3.5z"/>
                                            </g>
                                        </g>
                                    </svg>
                                @else
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         height="18" width="18"
                                         viewBox="0 0 468.293 468.293"
                                         style="enable-background:new 0 0 468.293 468.293;vertical-align: text-top;"
                                         onclick="@this.call('listCurrentDirectoryContent', '{{$file->getRealPath()}}')"
                                         xml:space="preserve">
                                    <path style="fill:#FCD462;" d="M443.317,413.9H24.976C11.182,413.9,0,402.718,0,388.924V79.368
        c0-13.794,11.182-24.976,24.976-24.976h118.096c9.023,0,17.345,4.867,21.769,12.732l13.773,24.487
        c4.423,7.865,12.745,12.732,21.769,12.732h242.936c13.794,0,24.976,11.182,24.976,24.976v259.605
        C468.293,402.718,457.111,413.9,443.317,413.9z"/>
                                        <path style="fill:#F6C358;" d="M24.976,413.9h418.341c13.794,0,24.976-11.182,24.976-24.976V129.32
        c0-13.794-11.182-24.976-24.976-24.976H262.782c-9.023,0-17.345,4.867-21.769,12.732l-13.773,24.487
        c-4.423,7.865-12.745,12.732-21.769,12.732H24.976C11.182,154.295,0,165.477,0,179.271v209.653C0,402.718,11.182,413.9,24.976,413.9
        z"/>
                                        <path style="fill:#FCD462;" d="M453.559,106.59c1.414,3.132,2.245,6.582,2.245,10.242v259.604c0,13.793-11.182,24.976-24.976,24.976
        H12.488c-3.66,0-7.11-0.831-10.242-2.245c3.916,8.671,12.597,14.733,22.73,14.733h418.341c13.794,0,24.976-11.182,24.976-24.976
        V129.32C468.293,119.186,462.232,110.506,453.559,106.59z"/>
                                </svg>
                                @endif
                                {{$file->getFileName()}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
