@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" style="display: flex; flex-direction: column; align-items: center; gap: 16px; margin: 30px 0; width: 100%;">
        
        <!-- Summary Info -->
        <div style="font-size: 0.85rem; color: #64748b; text-align: center;">
            Menampilkan <span style="font-weight: 700; color: #0f172a;">{{ $paginator->firstItem() }}</span> sampai <span style="font-weight: 700; color: #0f172a;">{{ $paginator->lastItem() }}</span> dari total <span style="font-weight: 700; color: #0f172a;">{{ $paginator->total() }}</span> data
        </div>

        <!-- Buttons Container -->
        <div style="display: flex; align-items: center; justify-content: center; gap: 6px; flex-wrap: wrap;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span style="display: inline-flex; align-items: center; gap: 6px; padding: 8px 14px; font-size: 0.82rem; font-weight: 600; color: #94a3b8; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 8px; cursor: not-allowed; user-select: none;">
                    <i class="bi bi-chevron-left" style="font-size: 0.75rem;"></i> Sebelumnya
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" style="display: inline-flex; align-items: center; gap: 6px; padding: 8px 14px; font-size: 0.82rem; font-weight: 700; color: #0f172a; background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; text-decoration: none; transition: all 0.2s ease;">
                    <i class="bi bi-chevron-left" style="font-size: 0.75rem;"></i> Sebelumnya
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; font-size: 0.82rem; color: #94a3b8;">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; font-size: 0.85rem; font-weight: 800; color: #0c192c; background: var(--primary-gold, #f59e0b); border: 1px solid #d97706; border-radius: 8px; user-select: none; box-shadow: 0 2px 6px rgba(245, 158, 11, 0.3);">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; font-size: 0.85rem; font-weight: 600; color: #334155; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; text-decoration: none; transition: all 0.2s ease;">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" style="display: inline-flex; align-items: center; gap: 6px; padding: 8px 14px; font-size: 0.82rem; font-weight: 700; color: #0f172a; background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; text-decoration: none; transition: all 0.2s ease;">
                    Selanjutnya <i class="bi bi-chevron-right" style="font-size: 0.75rem;"></i>
                </a>
            @else
                <span style="display: inline-flex; align-items: center; gap: 6px; padding: 8px 14px; font-size: 0.82rem; font-weight: 600; color: #94a3b8; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 8px; cursor: not-allowed; user-select: none;">
                    Selanjutnya <i class="bi bi-chevron-right" style="font-size: 0.75rem;"></i>
                </span>
            @endif
        </div>

    </nav>
@endif
